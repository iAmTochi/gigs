<div class="collapse" id="MobNav">
    <div class="dashboard-nav">
        <div class="dashboard-inner">
            <ul data-submenu-title="Main Navigation">
                <li class="active"><a href="{{ route('login') }}"><i class="lni lni-dashboard mr-2"></i>Dashboard</a></li>
                <li class="accordion">
                    <a href="" data-toggle="collapse" data-target="#manage-job" aria-expanded="true" aria-controls="manage-job"><i class="lni lni-add-files mr-2"></i>Gigs</a>

                    <ul id="manage-job" class="collapse">
                        <li><a href="{{ route('gigs.index') }}"><i class="lni lni-files mr-2"></i>View All Gigs</a></li>
                        <li><a href="{{ route('gigs.create') }}"><i class="lni lni-add-files mr-2"></i>Add a New Gig </a></li>
                    </ul>


                </li>
                <li class="accordion">
                    <a href="" data-toggle="collapse" data-target="#manage-user" aria-expanded="true" aria-controls="manage-user"><i class="lni lni-add-files mr-2"></i>Companies</a>
                    <ul id="manage-user" class="collapse">
                        <li><a href="{{ route('companies.index') }}"><i class="lni lni-bookmark mr-2"></i>View All Company</a></li>
                        <li><a href="{{ route('companies.create') }}"><i class="lni lni-mastercard mr-2"></i>Add New Company</a></li>

                    </ul>

                </li>

            </ul>

        </div>
    </div>
</div>
