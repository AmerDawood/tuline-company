

<li class="nav-item">
    <a class="nav-link menu-link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
        <i class="mdi mdi-speedometer"></i> <span data-key="t-dashboards">{{ __('site.dashboard') }}</span>
    </a>
    <div class="collapse menu-dropdown" id="sidebarDashboards">
        <ul class="nav nav-sm flex-column">

            <li class="nav-item">
                <a href="" class="nav-link" data-key="t-crm"> {{ __('site.dashboard') }} </a>
            </li>
            {{-- <li class="nav-item">
                <a href="" class="nav-link" data-key="t-analytics"> Website </a>
            </li> --}}

        </ul>
    </div>
</li> <!-- end Dashboard Menu -->

<li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-pages">Pages</span></li>

<li class="nav-item">
    <a class="nav-link menu-link" href="#sidebarSections" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSections">
        <i class="ri-rocket-line"></i> <span data-key="t-landing">Sections</span>
    </a>
    <div class="collapse menu-dropdown" id="sidebarSections">
        <ul class="nav nav-sm flex-column">
            <li class="nav-item">
                <a href="{{ route('sections.index') }}" class="nav-link" data-key="t-one-page"> All Sections </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('sections.create') }}" class="nav-link" data-key="t-nft-landing">Add Sections </a>
            </li>

        </ul>
    </div>
</li>


<li class="nav-item">
    <a class="nav-link menu-link" href="#sidebarServices" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarServices">
        <i class="ri-rocket-line"></i> <span data-key="t-landing">Services</span>
    </a>
    <div class="collapse menu-dropdown" id="sidebarServices">
        <ul class="nav nav-sm flex-column">
            <li class="nav-item">
                <a href="{{ route('services.index') }}" class="nav-link" data-key="t-one-page"> All Services </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('services.create') }}" class="nav-link" data-key="t-nft-landing">Add Service </a>
            </li>

        </ul>
    </div>
</li>


<li class="nav-item">
    <a class="nav-link menu-link" href="#sidebarCards" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCards">
        <i class="ri-rocket-line"></i> <span data-key="t-landing">Packages</span>
    </a>
    <div class="collapse menu-dropdown" id="sidebarCards">
        <ul class="nav nav-sm flex-column">
            <li class="nav-item">
                <a href="{{ route('packages.index') }}" class="nav-link" data-key="t-one-page"> All Packages </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('packages.create') }}" class="nav-link" data-key="t-nft-landing">Add Package </a>
            </li>

        </ul>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link menu-link" href="#sidebartechnology" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebartechnology">
        <i class="ri-rocket-line"></i> <span data-key="t-landing">Technology</span>
    </a>
    <div class="collapse menu-dropdown" id="sidebartechnology">
        <ul class="nav nav-sm flex-column">
            <li class="nav-item">
                <a href="{{ route('technologys.index') }}" class="nav-link" data-key="t-one-page"> All Technology </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('technologys.create') }}" class="nav-link" data-key="t-nft-landing">Add Technology </a>
            </li>

        </ul>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link menu-link" href="#sidebarProjects" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProjects">
        <i class="ri-rocket-line"></i> <span data-key="t-landing">Projects</span>
    </a>
    <div class="collapse menu-dropdown" id="sidebarProjects">
        <ul class="nav nav-sm flex-column">
            <li class="nav-item">
                <a href="{{ route('projects.index') }}" class="nav-link" data-key="t-one-page"> All Project </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('projects.create') }}" class="nav-link" data-key="t-nft-landing">Add Project </a>
            </li>

        </ul>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link menu-link" href="#sidebarAccount" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAccount">
        <i class="ri-rocket-line"></i> <span data-key="t-landing">Socila Accounts</span>
    </a>
    <div class="collapse menu-dropdown" id="sidebarAccount">
        <ul class="nav nav-sm flex-column">
            <li class="nav-item">
                <a href="{{ route('account.index') }}" class="nav-link" data-key="t-one-page"> All accounts </a>
            </li>

        </ul>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link menu-link" href="#sidebarContacts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarContacts">
        <i class="ri-rocket-line"></i> <span data-key="t-landing">Contacts</span>
    </a>
    <div class="collapse menu-dropdown" id="sidebarContacts">
        <ul class="nav nav-sm flex-column">
            <li class="nav-item">
                <a href="{{ route('requests.index') }}" class="nav-link" data-key="t-one-page"> All Contacts Request </a>
            </li>

        </ul>
    </div>
</li>





{{--
    Sections (Mobile , Web , ....) name , icon   =====>   done

    Service  (title , description ,  icon)    =====>   done




    Packages  (name , price , amenities (Like description) ,image , aminity)  =====>   done




    technology (Laravel , React , Node js , Flutter ) =====>   done


    Projects (Name , title , technology , link )



    Contact (Name , email , phone , how you get my company ,)  =====>   done



    Social (phone , Fax , email) =====>   done

    --}}
