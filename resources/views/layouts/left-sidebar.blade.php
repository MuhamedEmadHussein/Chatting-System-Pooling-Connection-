<!--! ================================================================ !-->
<!--! [Start] Navigation Menu !-->
<!--! ================================================================ !-->
<nav class="nxl-navigation">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="index.php" class="b-brand">
                <!-- ========   change your logo hear   ============ -->
                <img src="{{ asset('assets/images/chat.jpg') }}" alt="" style="height:120px" class="logo logo-lg" />
                <img src="{{ asset('assets/images/chat.jpg') }}" alt="" class="logo logo-sm" />
            </a>
        </div>
        <div class="navbar-content">
            <ul class="nxl-navbar">
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-send"></i></span>
                        <span class="nxl-mtext">Applications</span><span class="nxl-arrow"><i
                                class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('home') }}">Chat</a></li>
                        <!-- <li class="nxl- item"><a class="nxl-link" href="apps-email.php">Email</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="apps-tasks.php">Tasks</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="apps-notes.php">Notes</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="apps-storage.php">Storage</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="apps-calendar.php">Calendar</a></li> -->
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!--! ================================================================ !-->
<!--! [End] Navigation Menu !-->
<!--! ================================================================ !-->
