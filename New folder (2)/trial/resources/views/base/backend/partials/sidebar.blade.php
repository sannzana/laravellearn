<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar position-relative">	
	  	<div class="multinav">
		  <div class="multinav-scroll ps ps--active-y" style="height: 100%;">	
			  <!-- sidebar menu-->
			  <ul class="sidebar-menu" data-widget="tree">
				{{-- Dashboard --}}
				
				<li class="header">Dashboard</li>
				<li class="@yield('dashboard')">
					<a href="{{ route('home') }}">
						<i class="glyphicon glyphicon-home"></i>
						<span>Dashboard</span>
					</a>
				</li>
				<li class="treeview @yield('Manage-user')">
				  <a href="#">
					<i class="icon-Clipboard-check"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
					<span>User Management</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li class="@yield('Manage-user.admin-user')"><a href="{{ route('admin-users.index') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Admin Users</a></li>
					<li class="@yield('Manage-user.customer')"><a href="{{ route('customer.index') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Customers</a></li>
				  </ul>
				</li>
				<li class="treeview">
				  <a href="https://riday-admin-template.multipurposethemes.com/bs5/main/index2.html#">
					<i class="icon-Dinner"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
					<span>Menus</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/add_new_menu.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add New Menu</a></li>
					<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/menu_list.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Menu List</a></li>
					<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/menu_categories.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Categories</a></li>
				  </ul>
				</li>
				<li class="treeview">
				  <a href="https://riday-admin-template.multipurposethemes.com/bs5/main/index2.html#">
					<i class="icon-Group"><span class="path1"></span><span class="path2"></span></i>
					<span>Customer</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/customer.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Customer list</a></li>
					<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/members.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Members</a></li>
				  </ul>
				</li>
				<li>
				  <a href="https://riday-admin-template.multipurposethemes.com/bs5/main/analysis.html">
					<i class="icon-Chart-line"><span class="path1"></span><span class="path2"></span></i>
					<span>Analysis</span>
				  </a>
				</li>
				<li class="treeview">
				  <a href="https://riday-admin-template.multipurposethemes.com/bs5/main/index2.html#">
					<i class="icon-Cart"><span class="path1"></span><span class="path2"></span></i>
					<span>Online Store</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/ecommerce_products.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Products</a></li>
					<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/ecommerce_cart.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Products Cart</a></li>
					<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/ecommerce_products_edit.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Products Edit</a></li>
					<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/ecommerce_details.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Product Details</a></li>
					<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/ecommerce_orders.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Product Orders</a></li>
					<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/ecommerce_checkout.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Products Checkout</a></li>
					<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/invoice.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Invoice</a></li>
					<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/invoicelist.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Invoice List</a></li>	
				  </ul>
				</li>				
				<li class="header">UI &amp; Pages</li>
				<li class="treeview">
				  <a href="https://riday-admin-template.multipurposethemes.com/bs5/main/index2.html#">
					<i class="icon-Library"><span class="path1"></span><span class="path2"></span></i>
					<span>Collections</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/mailbox.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Mailbox</a></li>
					<li class="treeview">
						<a href="https://riday-admin-template.multipurposethemes.com/bs5/main/index2.html#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Widgets
							<span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/widgets_blog.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Blog</a></li>
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/widgets_chart.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Chart</a></li>
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/widgets_list.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>List</a></li>
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/widgets_social.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Social</a></li>
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/widgets_statistic.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Statistic</a></li>
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/widgets_weather.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Weather</a></li>
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/widgets.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Widgets</a></li>
						</ul>
					</li>
					<li class="treeview">
						<a href="https://riday-admin-template.multipurposethemes.com/bs5/main/index2.html#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Modals
							<span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/component_modals.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Modals</a></li>
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/component_sweatalert.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Sweet Alert</a></li>
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/component_notification.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Toastr</a></li>
						</ul>
					</li>
					<li class="treeview">
						<a href="https://riday-admin-template.multipurposethemes.com/bs5/main/index2.html#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Apps
							<span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/extra_calendar.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Calendar</a></li>
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/contact_app.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Contact List</a></li>
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/contact_app_chat.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Chat</a></li>
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/extra_taskboard.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Todo</a></li>
						</ul>
					</li>
					<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/email_index.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Emails</a></li>
				  </ul>
				</li>				  
				<li class="treeview">
				  <a href="https://riday-admin-template.multipurposethemes.com/bs5/main/index2.html#">
					<i class="icon-Brush"><span class="path1"></span><span class="path2"></span></i>
					<span>UI &amp; Components</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li class="treeview">
						<a href="https://riday-admin-template.multipurposethemes.com/bs5/main/index2.html#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Components
							<span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/component_bootstrap_switch.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Bootstrap Switch</a></li>
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/component_date_paginator.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Date Paginator</a></li>
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/component_media_advanced.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Advanced Medias</a></li>
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/component_rangeslider.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Range Slider</a></li>
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/component_rating.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Ratings</a></li>
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/component_animations.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Animations</a></li>
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/extension_fullscreen.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Fullscreen</a></li>
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/extension_pace.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Pace</a></li>
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/component_nestable.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Nestable</a></li>
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/component_portlet_draggable.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Draggable Portlets</a></li>
						</ul>
					</li>
					<li class="treeview">
						<a href="https://riday-admin-template.multipurposethemes.com/bs5/main/index2.html#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Utilities
							<span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/ui_grid.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Grid System</a></li>
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/box_cards.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>User Card</a></li>
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/box_advanced.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Advanced Card</a></li>
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/box_basic.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Basic Card</a></li>
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/box_color.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Card Color</a></li>
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/box_group.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Card Group</a></li>
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/ui_badges.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Badges</a></li>
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/ui_border_utilities.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Border</a></li>
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/ui_buttons.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Buttons</a></li>	
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/ui_color_utilities.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Color</a></li>
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/ui_dropdown.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dropdown</a></li>
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/ui_dropdown_grid.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dropdown Grid</a></li>
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/ui_progress_bars.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Progress Bars</a></li>	
						</ul>
					</li>
					<li class="treeview">
						<a href="https://riday-admin-template.multipurposethemes.com/bs5/main/index2.html#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Icons
							<span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/icons_fontawesome.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Font Awesome</a></li>
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/icons_glyphicons.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Glyphicons</a></li>
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/icons_material.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Material Icons</a></li>	
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/icons_themify.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Themify Icons</a></li>
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/icons_simpleline.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Simple Line Icons</a></li>
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/icons_cryptocoins.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Cryptocoins Icons</a></li>
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/icons_flag.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Flag Icons</a></li>
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/icons_weather.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Weather Icons</a></li>
						</ul>
					</li>
					<li class="treeview">
						<a href="https://riday-admin-template.multipurposethemes.com/bs5/main/index2.html#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Elements
							<span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/ui_ribbons.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Ribbons</a></li>
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/ui_sliders.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Sliders</a></li>
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/ui_typography.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Typography</a></li>
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/ui_tab.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Tabs</a></li>
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/ui_timeline.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Timeline</a></li>
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/ui_timeline_horizontal.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Horizontal Timeline</a></li>
						</ul>
					</li>
				  </ul>
				</li>				  
				<li class="treeview">
				  <a href="https://riday-admin-template.multipurposethemes.com/bs5/main/index2.html#">
					<i class="icon-File"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
					<span>Forms &amp; Tables</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					  <li class="treeview">
						<a href="https://riday-admin-template.multipurposethemes.com/bs5/main/index2.html#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Forms
							<span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/forms_advanced.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Form Elements</a></li>
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/forms_general.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Form Layout</a></li>
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/forms_wizard.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Form Wizard</a></li>	
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/forms_validation.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Form Validation</a></li>
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/forms_mask.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Formatter</a></li>
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/forms_xeditable.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Xeditable Editor</a></li>
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/forms_dropzone.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dropzone</a></li>
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/forms_code_editor.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Code Editor</a></li>
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/forms_editors.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Editor</a></li>
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/forms_editor_markdown.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Markdown</a></li>
						</ul>
					</li>
					<li class="treeview">
						<a href="https://riday-admin-template.multipurposethemes.com/bs5/main/index2.html#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Tables
							<span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/tables_simple.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Simple tables</a></li>
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/tables_data.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Data tables</a></li>
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/tables_editable.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Editable Tables</a></li>
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/tables_color.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Table Color</a></li>
						</ul>
					</li>					
				  </ul>
				</li>				  
				<li class="treeview">
				  <a href="https://riday-admin-template.multipurposethemes.com/bs5/main/index2.html#">
					<i class="icon-Chart-pie"><span class="path1"></span><span class="path2"></span></i>
					<span>Charts &amp; Maps</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					  <li class="treeview">
						<a href="https://riday-admin-template.multipurposethemes.com/bs5/main/index2.html#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Charts
							<span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/charts_chartjs.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>ChartJS</a></li>
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/charts_flot.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Flot</a></li>
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/charts_inline.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Inline charts</a></li>
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/charts_morris.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Morris</a></li>
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/charts_peity.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Peity</a></li>
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/charts_chartist.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Chartist</a></li>
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/charts_c3_axis.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Axis Chart</a></li>
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/charts_c3_bar.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Bar Chart</a></li>
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/charts_c3_data.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Data Chart</a></li>
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/charts_c3_line.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Line Chart</a></li>
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/charts_echarts_basic.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Basic Charts</a></li>
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/charts_echarts_bar.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Bar Chart</a></li>
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/charts_echarts_pie_doughnut.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Pie &amp; Doughnut Chart</a></li>
						</ul>
					</li>
					<li class="treeview">
						<a href="https://riday-admin-template.multipurposethemes.com/bs5/main/index2.html#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Maps
							<span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/map_google.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Google Map</a></li>
							<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/map_vector.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Vector Map</a></li>
						</ul>
					</li>					
				  </ul>
				</li>			
				<li class="treeview">
				  <a href="https://riday-admin-template.multipurposethemes.com/bs5/main/index2.html#">
					<i class="icon-Chat-locked"><span class="path1"></span><span class="path2"></span></i>
					<span>Authentication</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/auth_login.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Login</a></li>
					<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/auth_register.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Register</a></li>
					<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/auth_lockscreen.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Lockscreen</a></li>
					<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/auth_user_pass.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Recover password</a></li>	
				  </ul>
				</li>
				<li class="treeview">
				  <a href="https://riday-admin-template.multipurposethemes.com/bs5/main/index2.html#">
					<i class="icon-Chat-check"><span class="path1"></span><span class="path2"></span></i>
					<span>Miscellaneous</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/error_404.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Error 404</a></li>
					<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/error_500.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Error 500</a></li>
					<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/error_maintenance.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Maintenance</a></li>	
				  </ul>
				</li>  		
				<li class="treeview">
				  <a href="https://riday-admin-template.multipurposethemes.com/bs5/main/index2.html#">
					<i class="icon-User"><span class="path1"></span><span class="path2"></span></i>
					<span>Usefull Page</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/extra_app_ticket.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Support Ticket</a></li>
					<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/extra_profile.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>User Profile</a></li>
					<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/contact_userlist_grid.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Userlist Grid</a></li>
					<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/contact_userlist.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Userlist</a></li>	
					<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/sample_faq.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>FAQs</a></li>
				  </ul>
				</li>		  
				<li class="treeview">
				  <a href="https://riday-admin-template.multipurposethemes.com/bs5/main/index2.html#">
					<i class="icon-Clipboard"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
					<span>Extra Pages</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/sample_blank.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Blank</a></li>
					<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/sample_coming_soon.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Coming Soon</a></li>
					<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/sample_custom_scroll.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Custom Scrolls</a></li>
					<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/sample_gallery.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Gallery</a></li>
					<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/sample_lightbox.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Lightbox Popup</a></li>
					<li><a href="https://riday-admin-template.multipurposethemes.com/bs5/main/sample_pricing.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Pricing</a></li>
				  </ul>
				</li>  	     
			  </ul>
		  <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 868px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 672px;"></div></div></div>
		</div>
    </section>
  </aside>