<?php

namespace App\Http\Controllers\Backend\UserManagement\Customer;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\WalletCredit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class CustomerController extends Controller
{
    public $user;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = Auth::guard('web')->user();
            return $next($request);
        });
    }

    public function index()
    {
        $adminUsers = User::where('user_type', 2)->latest()->get();
        return view('admin.customer.index', compact('adminUsers'));
    }

    public function edit($id)
    {

        $user = User::findOrFail($id);

        // admin user edit
        return view('admin.customer.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $adminUser = User::findOrFail($id);
        $request->validate([
            'name'  => ['required'],
            'email'     => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($id)],
            'mobile'    => ['required', 'numeric', Rule::unique('users')->ignore($id)],
            'can_login' => ['required'],
        ]);

        $adminUser->name = $request->name;
        $adminUser->email = $request->email;
        $adminUser->mobile = $request->mobile;
        $adminUser->can_login = $request->can_login;

        if ($adminUser->save()) {
            return redirect()->route('customer.index')->with('success', "The $adminUser->name was updated successfully");
        } else {
            return redirect()->route('customer.index')->with('error', "Failed to update this $adminUser->name user");
        }
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);

        if ($user->delete()) {
            return redirect()->route('customer.index')->with('success', "The $user->name admin user has been deleted successfully");
        } else {
            return redirect()->route('customer.index')->with('error', "Failed to delete this $user->name admin user!");
        }
    }

    public function inActive($id)
    {
        User::find($id)->update(['can_login' => 0]);
        return redirect()->route('customer.index')->with('error', "Admin User has been disabled");
    }

    //status active

    public function active($id)
    {

        User::find($id)->update(['can_login' => 1]);
        return redirect()->route('customer.index')->with('success', 'Admin User has been enabled');
    }

    // credit form

    public function getCreditForm($id)
    {
        $userID = Auth::user()->id;
        $user = User::findOrFail($id);
        return view('admin.customer.creditForm', compact('user', 'userID'));
    }

    public function postCreditForm(Request $request, $id)
    {
        $adminUser = User::findOrFail($id);

        $request->validate([
            'credit_amount' => ['required'],
        ]);


        $soleDistributorID = Auth::guard('web')->user()->id;
        $balance = Auth::guard('web')->user()->wallet;
        $depositeBalance = $request->credit_amount;
        $agentBalance = $adminUser->wallet;

        if ($balance >= $depositeBalance) {
            $updateBalance = $balance - $depositeBalance;
            $agentupdateBalance = $depositeBalance + $agentBalance;
            $adminUser->wallet = $agentupdateBalance;

            if ($adminUser->save()) {

                $sdBalanceUpdate = User::where('id', $soleDistributorID)->first();
                $sdBalanceUpdate->wallet = $updateBalance;
                $sdBalanceUpdate->save();

                $walletCredit = new WalletCredit();
                $walletCredit->user_id = $adminUser->id;
                $walletCredit->admin_id = Auth::guard('web')->user()->id;
                $walletCredit->payment_mode = 'Credit';
                $walletCredit->amount = $request->credit_amount;
                $walletCredit->status = 'Active';
                $walletCredit->save();

                return redirect()->route('customer.index')->with('success', "$adminUser->username admin's wallet balance updated successfully!");
            } else {
                return redirect()->route('customer.index')->with('error', "Unable to update $adminUser->username admin's wallet!");
            }
        } else {
            return redirect()->route('customer.index')->with('error', "declined due to insufficient balance!");
        }
    }
}