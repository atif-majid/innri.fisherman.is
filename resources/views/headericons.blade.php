<div class="header-navbar-shadow"></div>
<nav class="header-navbar main-header-navbar navbar-expand-lg navbar navbar-with-menu fixed-top ">
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="navbar-collapse" id="navbar-mobile">
                <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                    <ul class="nav navbar-nav">
                        <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon bx bx-menu"></i></a></li>
                    </ul>
                    <ul class="nav navbar-nav bookmark-icons">
                        @php /*<li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-email.html" data-toggle="tooltip" data-placement="top" title="Email"><i class="ficon bx bx-envelope"></i></a></li>*/ @endphp
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-chat.html" data-toggle="tooltip" data-placement="top" title="Chat"><i class="ficon bx bx-chat"></i></a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-todo.html" data-toggle="tooltip" data-placement="top" title="Todo"><i class="ficon bx bx-check-circle"></i></a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-calendar.html" data-toggle="tooltip" data-placement="top" title="Calendar"><i class="ficon bx bx-calendar-alt"></i></a></li>
                    </ul>
                    <ul class="nav navbar-nav">
                        <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><i class="ficon bx bx-star warning"></i></a>
                            <div class="bookmark-input search-input">
                                <div class="bookmark-input-icon"><i class="bx bx-search primary"></i></div>
                                <input class="form-control input" type="text" placeholder="Explore Frest..." tabindex="0" data-search="template-search">
                                <ul class="search-list"></ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <ul class="nav navbar-nav float-right">
                    @php /*<li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span class="selected-language">English</span></a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-flag"><a class="dropdown-item" href="#" data-language="en"><i class="flag-icon flag-icon-us mr-50"></i> English</a><a class="dropdown-item" href="#" data-language="fr"><i class="flag-icon flag-icon-fr mr-50"></i> French</a><a class="dropdown-item" href="#" data-language="de"><i class="flag-icon flag-icon-de mr-50"></i> German</a><a class="dropdown-item" href="#" data-language="pt"><i class="flag-icon flag-icon-pt mr-50"></i> Portuguese</a></div>
                    </li>*/ @endphp
                    <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon bx bx-fullscreen"></i></a></li>
                    <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon bx bx-search"></i></a>
                        <div class="search-input">
                            <div class="search-input-icon"><i class="bx bx-search primary"></i></div>
                            <input class="input" type="text" placeholder="Explore Frest..." tabindex="-1" data-search="template-search">
                            <div class="search-input-close"><i class="bx bx-x"></i></div>
                            <ul class="search-list"></ul>
                        </div>
                    </li>
                    <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon bx bx-bell bx-tada bx-flip-horizontal"></i><span class="badge badge-pill badge-danger badge-up">{{$header_sumall}}</span></a>
                        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            @php
                                $strDispMsg = "";
                                if(count($header_Improvements)>0)
                                {
                                    $strDispMsg = count($header_Improvements)." improvements";
                                }
                                if(count($header_Salesopportunities)>0)
                                {
                                    if($strDispMsg!="")
                                    {
                                        $strDispMsg = $strDispMsg.", ";
                                    }
                                    $strDispMsg = $strDispMsg.count($header_Salesopportunities)." improvements";
                                }
                                if(count($header_tasks)>0)
                                {
                                    if($strDispMsg!="")
                                    {
                                        $strDispMsg = $strDispMsg.", ";
                                    }
                                    $strDispMsg = $strDispMsg.count($header_tasks)." on/off boarding tasks";
                                }
                            @endphp
                            <li class="dropdown-menu-header">
                                <div class="dropdown-header px-1 py-75 d-flex justify-content-between" style="background-color: #525253 !important;"><span class="notification-title">{{$strDispMsg}}</span><!--<span class="text-bold-400 cursor-pointer">Mark all as read</span>--></div>
                            </li>
                            <li class="scrollable-container media-list">
                                @if(count($header_templates)>0)
                                    @foreach($header_templates as $template)
                                        <a class="d-flex justify-content-between" href="{{ route('templates.review', $template->id) }}">
                                            <div class="media d-flex align-items-center">
                                                <div class="media-left pr-0">
                                                    <div class="avatar bg-primary bg-lighten-5 mr-1 m-0 p-25"><span class="avatar-content text-primary font-medium-2">TMP</span></div>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="media-heading">
                                                        <span class="text-bold-500">
                                                            {{ $template->template_title }} ({{ $template->template_version }})
                                                        </span>
                                                    </h6><small class="notification-text">{{$template->submit_date}}</small>
                                                </div>
                                            </div>
                                        </a>
                                    @endforeach
                                @endif
                                @if(count($header_Improvements)>0)
                                    @foreach($header_Improvements as $improvement)
                                        <a class="d-flex justify-content-between" href="{{ route('improvements.process', $improvement->id) }}">
                                            <div class="media d-flex align-items-center">
                                                <div class="media-left pr-0">
                                                    <div class="avatar bg-primary bg-lighten-5 mr-1 m-0 p-25"><span class="avatar-content text-primary font-medium-2">IMP</span></div>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="media-heading">
                                                        <span class="text-bold-500">
                                                            @if(strlen($improvement->description)>50)
                                                                {{substr($improvement->description, 0, 50)}}...
                                                            @else
                                                                {{$improvement->description}}
                                                            @endif
                                                        </span>
                                                    </h6><small class="notification-text">{{$improvement->due_date}}</small>
                                                </div>
                                            </div>
                                        </a>
                                    @endforeach
                                @endif
                                @if(count($header_Salesopportunities)>0)
                                    @foreach($header_Salesopportunities as $Salesopportunity)
                                        <a class="d-flex justify-content-between" href="{{ route('salesopportunity.process', $Salesopportunity->id) }}">
                                            <div class="media d-flex align-items-center">
                                                <div class="media-left pr-0">
                                                    <div class="avatar bg-primary bg-lighten-5 mr-1 m-0 p-25"><span class="avatar-content text-primary font-medium-2">SALE</span></div>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="media-heading">
                                                    <span class="text-bold-500">
                                                        @if(strlen($Salesopportunity->description)>50)
                                                            {{substr($Salesopportunity->description, 0, 50)}}...
                                                        @else
                                                            {{$Salesopportunity->description}}
                                                        @endif
                                                    </span>
                                                    </h6>
                                                </div>
                                            </div>
                                        </a>
                                    @endforeach
                                @endif
                                @if(count($header_tasks)>0)
                                    @foreach($header_tasks as $task)
                                        <a class="d-flex justify-content-between" href="#">
                                            <div class="media d-flex align-items-center">
                                                <div class="media-left pr-0">
                                                    <div class="avatar bg-primary bg-lighten-5 mr-1 m-0 p-25"><span class="avatar-content text-primary font-medium-2">TASK</span></div>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="media-heading">
                                                <span class="text-bold-500">
                                                    {{$task->task}}
                                                </span>
                                                    </h6><small class="notification-text">{{$task->due_date}}</small>
                                                </div>
                                            </div>
                                        </a>
                                    @endforeach
                                @endif
                            </li>
                            <!--<li class="dropdown-menu-footer"><a class="dropdown-item p-50 text-primary justify-content-center" href="javascript:void(0)">Read all notifications</a></li>-->
                        </ul>
                    </li>
                    <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                            <?php /*<div class="user-nav d-sm-flex d-none"><span class="user-name"> {{ Auth::user()->name }}</span><span class="user-status text-muted">Available</span></div><span><img class="round" src="app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40"></span>*/?>
                            <div class="user-nav d-sm-flex d-none"><span class="user-name"> {{ Auth::user()->name }}</span> @php /*<span class="user-status text-muted">Available</span>*/ @endphp </div><span><img class="round" src="{{ Auth::user()->getpicture() }}" alt="avatar" height="40" width="40"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right pb-0">
                            <a class="dropdown-item" href="{{ route('change-password') }}"><i class="bx bx-user mr-50"></i> Change Password</a>
                            <?php /*<a class="dropdown-item" href="app-email.html"><i class="bx bx-envelope mr-50"></i> My Inbox</a>
                            <a class="dropdown-item" href="app-todo.html"><i class="bx bx-check-square mr-50"></i> Task</a>
                            <a class="dropdown-item" href="app-chat.html"><i class="bx bx-message mr-50"></i> Chats</a>*/?>
                            <div class="dropdown-divider mb-0"></div><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="bx bx-power-off mr-50"></i> Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
