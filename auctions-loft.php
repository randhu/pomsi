
<?php include "header_auctions.php";?>

<div role="title" class="title-container container">
    <div class="row">
        
        
    </div>
</div>

<div role="main" class="main-container container js-quickedit-main-content">
  <div class="row help-region">
    <div class="alert alert-info messages info region region-help">
        <span class="icon glyphicon glyphicon-question-sign" aria-hidden="true"></span>
        <div data-drupal-messages-fallback class="hidden"></div>

    </div>

</div>

<div class="row">
  
    
    <section class="content col-sm-12">

      <a id="tabs" class=""></a>
      
      
      <a id="main-content"></a>
      <div class="region region-content-first">
        <div id="block-auctions-bootstrap-content">
          
            
          
            <div id="auction_4137" data-id="4137"  class="auction-full entity-full auction row container auction-live">
              <div class="auction-info col-xs-12">
                <div class="inner_container">
                  <div class="favourite-icon favourite-type-auction">
                    <auction-favourite :favourites="favourites" :auction_id="4137" data-token="a.fav:4137" class="artoken "></auction-favourite>

                </div>
                <div class="info-left col-md-3 col-xs-5 col-tn-12">
                    <img src="//auctions-static2.pipa.be/sites/default/files/styles/col4/public/auction/main-pictures/wijnands.jpg">
                </div>
                <div class="info-right col-md-9 col-xs-7 col-tn-12">
                    <h1>
                      
                        <div class="field field--name-title field--type-string field--label-hidden field--item">Wijnands &amp; zoon (NL)</div>
                        
                    </h1>
                    <h3>
                      
                        <div class="field field--name-field-commer field--type-string field--label-hidden field--item">All old birds until 2019 plus specially bred youngsters from 2020</div>
                        
                    </h3>
                    <div class="content">
                      
                        <div class="field field--name-field-intro field--type-string-long field--label-hidden field--item">Roger and Harry Wijnands have been among the absolute best in the international marathon scene for quite a while. These fanciers have a truly astounding palmares in some of the most demanding races, and in Barcelona in particular. Their breeding birds Kleine Jo, Olano, De Soustons, Pozzato, Blauwe Vanoppen and De Witneus gained an international reputation with their exceptional breeding value. Father and mother Wijnands have passed away, so the Ringhoeve will be put up for sale. Roger will be moving out as well, so they will be auctioning their entire pigeon collection from 2019 and older. We have a group of proven breeding and racing birds on offer, plus some special young birds from their best pigeons.</div>
                        
                    </div>

                    <div class="link-btn link-btn-default icon-arrow-right auction-details">
                        <a href="/en/auction/2020-12-wijnands-zoon-nl/details" class="btn">Loft information</a>
                    </div>
                    
                    <div class="link-btn download-catalogue">
                        <a href="//auctions-static2.pipa.be/sites/default/files/uploads/catalogue/0203263%20Folder%20Wijnands%20en%20ZN%20ENG_0.pdf" class="btn" target="_blank"><i class="glyphicon glyphicon-download-alt"></i>Download catalogue</a>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="clearfix"></div>

        

        
        <span data-token="p.l:2|120015:120027:120031:120512:120513:120514:120515:120516:120517:120518:120519:120520:120521:120522:120523:120524:120525:120526:120527:120528:120529:120530:120531:120532:120533:120534|4137" class="artoken"></span>
        <span data-token="p.l:1|120017:120023:120488:120489:120490:120491:120492:120493:120494:120495:120496:120497:120498:120499:120500:120501:120502:120503:120504:120505:120506:120507:120508:120509:120510:120511|4137" class="artoken"></span>
        <span data-token="p.l:5|120019:120043:120583:120584:120585:120586:120587:120588:120589:120590:120591:120592:120593:120594:120595:120596:120597:120598:120599:120600:120601:120602:120603:120604:120605:120606:120607:120608|4137" class="artoken"></span>
        <span data-token="p.l:3|120021:120029:120037:120535:120536:120537:120538:120539:120540:120541:120542:120543:120544:120545:120546:120547:120548:120549:120550:120551:120552:120553:120554:120555:120556:120557|4137" class="artoken"></span>
        <span data-token="p.l:6|120025:120033:120035:120039:120609:120610:120611:120612:120613:120614:120615:120616:120617:120618:120619:120620:120621:120622:120623:120624:120625:120626:120627:120628:120629|4137" class="artoken"></span>
        <span data-token="p.l:4|120041:120558:120559:120560:120561:120562:120563:120564:120565:120566:120567:120568:120569:120570:120571:120572:120573:120574:120575:120576:120577:120578:120579:120580:120581:120582|4137" class="artoken"></span>


        <auction-wrapper ref="auction" :auctions="auctions" :auction_id="4137" :auction_parts="auction_parts" @set_pigeon_visibility="updatePigeonVisibility" :pigeons="pigeons" :pigeon_lists="pigeon_lists" :view_mode="view_mode" :number_of_pigeons="number_of_pigeons" :facets="facets" :bos="bos" :favourites="favourites" :hidden_pigeons_per_part="hidden_pigeons_per_part" :visible_parts="visible_parts" :pigeon_visibility="pigeon_visibility" :servertime="servertime" data-token="a.full" class="artoken">
            <div class="auction-full entity-full auction row container auction-live placeholder">
              <div class="auction-pigeons col-xs-12">
                <div class="meta col-xs-12">
                  <div class="meta-left">
                    <div class="toggles">
                      <div class="btn-group toggle-buttons">
                        <button type="button" id="switch-grid" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-th"></span></button>
                        <button type="button" id="switch-list" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-th-list"></span></button>
                    </div>
                    <div class="btn-group toggle-filter">
                        <button type="button" id="toggle-filter" class="btn btn-primary btn-sm pipa_tooltip"><span class="glyphicon glyphicon-filter"></span></button>
                    </div>
                </div>
            </div>
            <div class="meta-right">
                <div class="end-time">...</div>
            </div>
        </div>
        <div class="clear"></div>

        <div class="content col-xs-12">

          <div class="col-xs-12 pigeon_lists">

              <div class="pigeons-panel panel open pigeons_visible">
                <div class="pigeons-heading panel-heading clearfix">
                  <div class="pull-left">&nbsp;</div>
                  <div class="pull-right">
                    <span class="number_of_pigeons"> ... </span>
                    <span class="endtime"> ... </span>
                    <span class="clickable panel-open"><i class="glyphicon glyphicon-chevron-up"></i></span>
                </div>
            </div>

            <div class="pigeons-body panel-body open">
              <div class="pigeons placeholders">

                <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
                <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
                <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
                <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
                <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
                <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
                <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
                <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
                <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
                <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
                <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
                <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
                <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
                <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
                <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
                <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
                <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
                <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
                <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
                <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
                <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
                <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
                <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
                <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
                <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
                <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
                
            </div>
        </div>
    </div>
    <div class="pigeons-panel panel open pigeons_visible">
        <div class="pigeons-heading panel-heading clearfix">
          <div class="pull-left">&nbsp;</div>
          <div class="pull-right">
            <span class="number_of_pigeons"> ... </span>
            <span class="endtime"> ... </span>
            <span class="clickable panel-open"><i class="glyphicon glyphicon-chevron-up"></i></span>
        </div>
    </div>

    <div class="pigeons-body panel-body open">
      <div class="pigeons placeholders">

        <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
        <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
        <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
        <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
        <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
        <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
        <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
        <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
        <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
        <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
        <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
        <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
        <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
        <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
        <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
        <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
        <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
        <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
        <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
        <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
        <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
        <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
        <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
        <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
        <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
        <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
        
    </div>
</div>
</div>
<div class="pigeons-panel panel open pigeons_visible">
    <div class="pigeons-heading panel-heading clearfix">
      <div class="pull-left">&nbsp;</div>
      <div class="pull-right">
        <span class="number_of_pigeons"> ... </span>
        <span class="endtime"> ... </span>
        <span class="clickable panel-open"><i class="glyphicon glyphicon-chevron-up"></i></span>
    </div>
</div>

<div class="pigeons-body panel-body open">
  <div class="pigeons placeholders">

    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    
</div>
</div>
</div>
<div class="pigeons-panel panel open pigeons_visible">
    <div class="pigeons-heading panel-heading clearfix">
      <div class="pull-left">&nbsp;</div>
      <div class="pull-right">
        <span class="number_of_pigeons"> ... </span>
        <span class="endtime"> ... </span>
        <span class="clickable panel-open"><i class="glyphicon glyphicon-chevron-up"></i></span>
    </div>
</div>

<div class="pigeons-body panel-body open">
  <div class="pigeons placeholders">

    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    
</div>
</div>
</div>
<div class="pigeons-panel panel open pigeons_visible">
    <div class="pigeons-heading panel-heading clearfix">
      <div class="pull-left">&nbsp;</div>
      <div class="pull-right">
        <span class="number_of_pigeons"> ... </span>
        <span class="endtime"> ... </span>
        <span class="clickable panel-open"><i class="glyphicon glyphicon-chevron-up"></i></span>
    </div>
</div>

<div class="pigeons-body panel-body open">
  <div class="pigeons placeholders">

    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    
</div>
</div>
</div>
<div class="pigeons-panel panel open pigeons_visible">
    <div class="pigeons-heading panel-heading clearfix">
      <div class="pull-left">&nbsp;</div>
      <div class="pull-right">
        <span class="number_of_pigeons"> ... </span>
        <span class="endtime"> ... </span>
        <span class="clickable panel-open"><i class="glyphicon glyphicon-chevron-up"></i></span>
    </div>
</div>

<div class="pigeons-body panel-body open">
  <div class="pigeons placeholders">

    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    <div class="pigeon-teaser placeholder pigeon col-tn-12 col-lg-3 col-md-4 col-sm-4 col-xs-4"><div>&nbsp;</div></div>
    
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</auction-wrapper>

</div>

</div>
</div>







</section>

</div>
</div>

<?php include "footer_auctions2.php";?>

