@extends('layouts.app')
@section('content')
    <h1>iDispatcher GPS</h1>
    <p>iDispatcher GPS is a mobile app that is used by taxicab drivers for GPS based dispatching. Drivers receive a push
        notification
        when a nearby customer is needing a taxi. Think Uber lite - very lite.</p>
    <p>You may download it, but it's not very useful without login credentials. (Todo - make a demo backend)</p>
    <p>The source code is not available because of an API key that's hardcoded into config.xml.
        The build process pulls it from github. (Todo - create a config.xml.example file so that we can hide the key,
        and open source this project) </p>
    <br>
    <div>
        <p>Download the iDispatcher GPS app</p>
    </div>
    <div>
    <div class="row">
        <div class="col-sm-3">
            <!-- iDispatcher Logo -->
            <img class="thumbnail" src="images/idispatcher_gps_logo.png"
                 alt="iDispatcher Logo">
        </div>
        <div class="col-sm-3">
            <br>
            <!-- Google play  -->
            <a href='https://play.google.com/store/apps/details?id=us.donnert.gps&pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1'>
                <img width="152" alt='Get it on Google Play'
                     src='https://play.google.com/intl/en_us/badges/images/generic/en_badge_web_generic.png'/>
            </a>
            <br>
            <br>
            &nbsp;<!-- Apple App Store -->
            <a href="https://itunes.apple.com/us/app/idispatcher-gps-tracker/id1170478561?mt=8"
               style=" display:inline-block;overflow:hidden;background:url(//linkmaker.itunes.apple.com/assets/shared/badges/en-us/appstore-lrg.svg) no-repeat;width:135px;height:40px;background-size:contain;"></a>
        </div>
    </div>
        <br>
        <br>
        <br>
        <footer>Google Play and the Google Play logo are trademarks of Google Inc.</footer>
        <br>
    </div>
@endsection


