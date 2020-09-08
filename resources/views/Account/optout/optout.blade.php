@extends('layouts.app')
@section('title', "Profile")

@section('content')
  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="sidebar-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="#">
                <span data-feather="user-settings"></span>
                User Settings
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">
                <span data-feather="page-settings"></span>
                Page Settings
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/Account/Optout/">
                <span data-feather="page-settings"></span>
                Opt Out
              </a>
            </li>
          </ul>
        </div>
      </nav>
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class="container">
          <section>
            <p>All of the data on this site (heroesprofile.com, api.heroesprofile.com) is dynamically generated by Blizzard data obtained by replays uploaded to HotsAPI, HotsLogs, or Heroes Profile. Please refer to Blizzard's licensing agreement regarding their ownership of your Battletag and data.  Any players' replay they upload may have information on your assigned battletag and we do not control which data is uploaded to HotsAPI, HotsLogs, or Heroes Profile.</p>
            <p>If you do not wish for your battletag to appear on the site or API, we provide the option for you to opt-out. In order to do this, we require that you authenticate with your Blizzard account. This ensures that you are the player with that Battletag and ensures that the system is not abused by those wishing to remove other players' data.</p>
            <p>Please choose a region below, read the disclaimer and confirm, then click "opt-out". You will be redirected to Blizzard's secure authentication and asked to allow access for your Battletag. This is the only information we use, and we do not store this information anywhere. We do not collect or store any personal information. After you have opted out, you may remove your authorization for this website by going to your Battle.net account under "Security & Privacy" and managing your authorized applications.</p>
            <p>Once you have opted-out, data uploaded from replays in which you played a game will still be used to calculate data across the site, but users will be unable to search using your battletag, and your battletag will not show up in games played</p>
            <p>Opting out does not guarantee removal of any data from 3rd party sites or users who retreived data from the HeroesProfile API or website prior to opting out.   Heroes Profile is not responsibile for 3rd party sites or users who use our data or for the removal of data sourced from our tools on 3rd party sites or users.</p>

            <form action="/account/optout/save" id="optout" method="POST">
              @csrf
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" required>
                <label class="form-check-label" for="defaultCheck1">
                  I understand that opting out prevents other sites and users from accessing any of my battletag's data, either through the Heroes Profile main site, or the API site.  <b>This may make me ineligeble for participation in some Amateur Series league play.</b><p>
                  </label>
                </div>
                <p>You will be directed to authenticate with Blizzard's secure authentication after submission of this form</p>
                <input type="submit" value="Opt Out" class="button btn mr-2 btn-secondary btn-sm"/>
              </form>
            </section>
          </div>
        </main>
      </div>
    </div>
  @endsection
  @section('scripts')
  @endsection
