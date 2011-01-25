<script type="text/javascript">
$(function() {
    $("#article1").overlay({
        expose: '#BDB9B9', 
        top: 30,
        left: 20,
        onBeforeLoad: function() {
            // grab wrapper element inside content
            var wrap = this.getOverlay().find(".contentWrap");
            // load the page specified in the trigger
            wrap.load(this.getTrigger().attr("href"));
        }
    });
    $("#article2").overlay({
        expose: '#BDB9B9', 
        top: 30,
        left: 20,
        onBeforeLoad: function() {
            // grab wrapper element inside content
            var wrap = this.getOverlay().find(".contentWrap");
            // load the page specified in the trigger
            wrap.load(this.getTrigger().attr("href"));
        }
    });
});
</script>
<div class="item">
    <div class="frame curved" id="frame-about">
        <div id="map" class="pic curved">
            <div id="aboutus" class="clearfix">
                <div class="span-16">
                    <h2>%%T_001%%</h2>
                    <p>%%T_002%%</p>
                    <p>%%T_003%%</p>
                    <div class="notice">
                    <h4><strong>%%T_005%%</strong></h4>
                    <ul>
                    <li><a href="<?php echo site_url('article/index/hokubei');?>" rel="#overlay-article" id="article1">%%T_006%%</a></li>
                    <li><a href="<?php echo site_url('article/index/sportsj');?>" rel="#overlay-article" id="article2">%%T_007%%</a></li>
                    <ul>
                    </div>
                </div>
                <div class="span-20 prepend-top last">
                    <h3>%%T_004%%</h3>
<iframe width="400" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=zionus+bsm&amp;sll=37.589717,-122.340682&amp;sspn=0.013245,0.021565&amp;ie=UTF8&amp;hq=zionus+bsm&amp;hnear=&amp;cid=12313223195235140816&amp;ll=37.662624,-122.366409&amp;spn=0.217426,0.274658&amp;z=11&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=zionus+bsm&amp;sll=37.589717,-122.340682&amp;sspn=0.013245,0.021565&amp;ie=UTF8&amp;hq=zionus+bsm&amp;hnear=&amp;cid=12313223195235140816&amp;ll=37.662624,-122.366409&amp;spn=0.217426,0.274658&amp;z=11&amp;iwloc=A" style="color:#0000FF;text-align:left" target="_blank">View Larger Map</a></small>
                </div>
            </div>
        </div>
    </div>
</div>

