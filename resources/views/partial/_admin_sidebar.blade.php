<div class="collapse" id="MobNav">
    <div class="dashboard-nav">
        <div class="dashboard-inner">
            <ul data-submenu-title="Main Navigation">
                <li class="active"><a href="{{ route('login') }}"><i class="lni lni-dashboard mr-2"></i>Dashboard</a></li>
                <li class="accordion">
                    <a href="" data-toggle="collapse" data-target="#manage-job" aria-expanded="true" aria-controls="manage-job"><i class="lni lni-add-files mr-2"></i>Manage Jobs</a>
                    @if(auth()->user()->role == "employer")
                    <ul id="manage-job" class="collapse">
                        <li><a href="{{ route('jobs.index') }}"><i class="lni lni-files mr-2"></i>View All Jobs<span class="count-tag bg-warning">4</span></a></li>
                        <li><a href="{{ route('jobs.create') }}"><i class="lni lni-add-files mr-2"></i>Post New Job </a></li>
                    </ul>
                    @endif
                    @if(auth()->user()->role == "admin")
                    <ul id="manage-job" class="collapse">
                        <li><a href="{{ route('manage-jobs.index') }}"><i class="lni lni-files mr-2"></i>View All Jobs<span class="count-tag bg-warning">4</span></a></li>

                    </ul>
                    @endif

                </li>
                <li class="accordion">
                    <a href="" data-toggle="collapse" data-target="#manage-user" aria-expanded="true" aria-controls="manage-user"><i class="lni lni-add-files mr-2"></i>Manage Users</a>
                    <ul id="manage-user" class="collapse">
                        <li><a href="dashboard-shortlisted-resume.html"><i class="lni lni-bookmark mr-2"></i>View All Users<span class="count-tag bg-warning">4</span></a></li>
                        <li><a href="dashboard-packages.html"><i class="lni lni-mastercard mr-2"></i>Add New User</a></li>

                    </ul>

                </li>
                <li class="accordion">
                    <a href="" data-toggle="collapse" data-target="#manage-applicant" aria-expanded="true" aria-controls="manage-applicant"><i class="lni lni-briefcase mr-2"></i>Manage Applicants</a>
                    <ul id="manage-applicant" class="collapse">
                        <li><a href="dashboard-shortlisted-resume.html"><i class="lni lni-files mr-2"></i>View All Applicants<span class="count-tag bg-warning">4</span></a></li>
                    </ul>

                </li>
                <li><a href="dashboard-messages.html"><i class="lni lni-envelope mr-2"></i>Messages<span class="count-tag">4</span></a></li>





            </ul>
            <ul data-submenu-title="My Accounts">
                <li><a href="dashboard-my-profile.html"><i class="lni lni-user mr-2"></i>My Profile </a></li>
                <li><a href="dashboard-change-password.html"><i class="lni lni-lock-alt mr-2"></i>Change Password</a></li>
                <li><a href="javascript:void(0);"><i class="lni lni-trash-can mr-2"></i>Delete Account</a></li>
                <li>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                        <i class="lni lni-power-switch mr-1"></i> Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>
