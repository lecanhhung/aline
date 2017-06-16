<div id="menu" class="hidden-print hidden-xs  sidebar-white">
    <div id="sidebar-collapse-wrapper">
        <div id="brandWrapper">
            <a href="{$base_url_admin}" class="display-block-inline pull-left logo">
                <img src="{$base_tlp_admin}/images/logo.png" alt="">
            </a>
            {* <a href="{$base_url_admin}"><span class="text">Air Trippy</span></a> *}
        </div>
        <div id="logoWrapper">
            <div id="logo">
                <a href="{$base_url_admin}/login/logout/" title="Logout" class="btn btn-sm btn-inverse pull-right"><i class="fa fa-fw fa-sign-out"></i></a>
            </div>
        </div>
        <ul class="menu list-unstyled hide" id="navigation_components"></ul>
        <ul class="menu list-unstyled hide" id="navigation_modules"></ul>
        <ul class="menu list-unstyled hide" id="navigation_modules_front"></ul>
        <ul class="menu list-unstyled" id="navigation_current_page">
            <li class="hasSubmenu">
                <a href="{$base_url_admin}/" class="glyphicons home ">
                    <i></i><span>Dashboard</span>
                </a>      
            </li>

            <li class="hasSubmenu {if $current_control eq 'agency'}active{/if}">
                <a href="#sidebar-collapse-member" data-toggle="collapse" class="glyphicons user"><i></i><span>Agency management</span></a>
                <ul id="sidebar-collapse-member" class="collapse {if $current_control eq 'agency'}in{/if}">

                    
                    <li {if $current_method == 'index'}class="active"{/if}><a href="{$base_url_admin}/agency/"><i class="fa fa-edit"></i>{$lable.list_engycies}</a></li>

                    <li {if $current_method == 'add'}class="active"{/if}><a href="{$base_url_admin}/agency/add/"><i class="fa fa-edit"></i>{$lable.add_angecy}</a></li>

                    {* <li><a href="{$base_url_admin}/agency/update/"><i class="fa fa-edit"></i>{$lable.update_angecy}</a></li> *}
                    
                </ul>
            </li>

            <li class="hasSubmenu {if $current_control eq 'tour'}active{/if}">
                <a href="#sidebar-collapse-projects" data-toggle="collapse"><i class="fa fa-list"></i>Tour management</a>
                <ul id="sidebar-collapse-projects" class="collapse {if $current_control eq 'tour'}in{/if}">
                    <li ><a href="{$base_url_admin}/tour/"><i class="fa fa-edit"></i>{$lable.list_tours}</a></li>
                    <li ><a href="{$base_url_admin}/tour/add/"><i class="fa fa-edit"></i>{$lable.btn_add_tour}</a></li>
                </ul>
            </li>
            
            <li class="hasSubmenu {if $current_control eq 'special'}active{/if}">
                <a href="#sidebar-collapse-special" data-toggle="collapse"><i class="fa fa-map-marker"></i>Special management</a>
                <ul id="sidebar-collapse-special" class="collapse {if $current_control eq 'special'}in{/if}">
                    <li ><a href="{$base_url_admin}/special/items/"><i class="fa fa-edit"></i>{$lable.list_items}</a></li>
                    <li ><a href="{$base_url_admin}/special/"><i class="fa fa-edit"></i>{$lable.add}</a></li>
                </ul>
            </li>

            <li class="hasSubmenu {if $current_control eq 'blogcat' || $current_control eq 'blogs' || $current_control eq 'toursuggestion'}active{/if}">
                <a href="#sidebar-collapse-mail" data-toggle="collapse"><i class="fa fa-list"></i>Blog management</a>
                <ul id="sidebar-collapse-mail" class="collapse {if $current_control eq 'blogcat' || $current_control eq 'blogs' || $current_control eq 'toursuggestion'}in{/if}">
                    <li {if $current_control eq 'blogs'}class="active"{/if}><a href="{$base_url_admin}/blogs/items/"><i class="fa fa-edit"></i> List items</a></li>
                    <li {if $current_control eq 'blogcat'}class="active"{/if}><a href="{$base_url_admin}/blogcat/items/"><i class="fa fa-edit"></i> Category</a></li>
                    <li {if $current_control eq 'toursuggestion'}class="active"{/if}><a href="{$base_url_admin}/toursuggestion/items/"><i class="fa fa-edit"></i> Tour suggestion</a></li>
                </ul>
            </li>


            <li class="hasSubmenu {if $current_control eq 'experience'}active{/if}" >
                <a href="#sidebar-collapse-blogs" data-toggle="collapse" class="fa fa-thumbs-o-up"><i></i><span>Experience images</span></a>
                <ul id="sidebar-collapse-blogs" class="collapse">
                    <li ><a href="{$base_url_admin}/experience/"><i class="fa fa-edit"></i> List items</a></li>
                    <li ><a href="{$base_url_admin}/experience/add"><i class="fa fa-edit"></i> Add</a></li>
                </ul>
            </li>


            <li class="hasSubmenu {if $current_control eq 'posting_request'}active{/if}">
                <a href="#sidebar-collapse-consulting" data-toggle="collapse" class="fa fa-pencil-square-o"><i></i><span>Yêu cầu đăng tour</span></a>
                <ul id="sidebar-collapse-consulting" class="collapse {if $current_control eq 'posting_request'}in{/if}">
                    <li><a href="{$base_url_admin}/posting_request/"><i class="fa fa-edit"></i> Danh sách</a></li>
                    <li><a href="{$base_url_admin}/posting_request/inactive"><i class="fa fa-edit"></i> Thùng rác</a></li>
                </ul>
            </li>


            <li class="hasSubmenu {if $current_control eq 'callme'} active {/if}">
                <a href="#sidebar-collapse-pages" data-toggle="collapse" class="fa fa-phone-square"><i></i><span>Call me</span></a>
                <ul id="sidebar-collapse-pages" class="collapse {if $current_control eq 'callme'} in {/if}">
                    <li><a href="{$base_url_admin}/callme/"><i class="fa fa-edit"></i> Danh sách</a></li>
                    <li><a href="{$base_url_admin}/callme/inactive/"><i class="fa fa-edit"></i> Thùng rác</a></li>
                </ul>
            </li>


            <li class="hasSubmenu {if $current_control eq 'visitor'}active{/if}">
                <a href="#sidebar-collapse-banners" data-toggle="collapse" class="glyphicons picture"><i></i><span>Visitor management</span></a>
                <ul id="sidebar-collapse-banners" class="collapse {if $current_control eq 'visitor'}in{/if}">
                    <li><a href="{$base_url_admin}/visitor/"><i class="fa fa-list-ul"></i> Danh sách</a>
                    <li><a href="{$base_url_admin}/visitor/inactive/"><i class="fa fa-list-ol"></i>Thùng rác</a></li>
                </ul>
            </li>

            <li class="hasSubmenu {if $current_control eq 'language' || $current_control eq 'tourcat' || $current_control eq 'general' || $current_control eq 'tourlocation' || $current_control eq 'tourdestination'} active {/if}">

                <a href="#sidebar-collapse-maps" data-toggle="collapse" class="glyphicons settings"><i></i><span>Setting</span></a>
                <ul id="sidebar-collapse-maps" class="collapse {if $current_control eq 'language' || $current_control eq 'tourcat' || $current_control eq 'general' || $current_control eq 'tourlocation' || $current_control eq 'tourdestination'} in {/if}">

                    <li><a href="{$base_url_admin}/users/"><i class="fa fa-wrench"></i>Admin</a></li>

                    
                    <li><a href="{$base_url_admin}/pricepackage/items"><i class="fa fa-wrench"></i>Price management</a></li>
                    
                    <li><a href="{$base_url_admin}/banks/items/"><i class="fa fa-wrench"></i>Bank - ATM</a></li>
                    
                    <li {if $current_control eq 'tourcat'} class="active" {/if}><a href="{$base_url_admin}/tourcat/viewnested"><i class="fa fa-wrench"></i>Tour category</a></li>
                    <li {if $current_control eq 'tourdestination'} class="active" {/if}><a href="{$base_url_admin}/tourdestination/viewnested"><i class="fa fa-wrench"></i>Tour destination</a></li>
                    <li {if $current_control eq 'tourlocation'} class="active" {/if}><a href="{$base_url_admin}/tourlocation/viewnested"><i class="fa fa-wrench"></i>Tour location</a></li>
                    <li {if $current_control eq 'general'} class="active" {/if}><a href="{$base_url_admin}/general/items"><i class="fa fa-wrench"></i>General</a></li>
                    <li {if $current_control eq 'language'} class="active" {/if}><a href="{$base_url_admin}/language/items"><i class="fa fa-wrench"></i>Biến chung</a></li>
    
                </ul>
            </li>
            <li class="hasSubmenu "> &nbsp; </li>
            <li class="hasSubmenu "> &nbsp; </li>
        </ul>

    </div>
</div>
