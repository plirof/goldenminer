<!--
*************************************
********* THE GOLDEN MINER **********
*************************************
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  
  <meta http-equiv="content-type" content="text/html; charset=windows-1250">
  
  <title>The Golden Miner</title>
  <meta name="title" content="The Golden Miner" />
  <meta name="description" content="Lightweight, javascript-based mining game. Doesn't need registration, free for all :)" />
  <meta name="keywords" content="mining game, miner, game, clicker, client game, javascript game" />
  
  <link rel="image_src" href="http://goldenminer.org/css/images/fb_miner.png" />
  <meta property="og:image" content="http://goldenminer.org/css/images/fb_miner.png" />
  
  <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<!--
  <script src="js/helpers.js?ver=<?php echo rand(1, 800000); ?>"></script>
  <script src="js/nomin/lzma.js?ver=<?php echo rand(1, 800000); ?>"></script>
  <script src="js/nomin/minions.js?ver=<?php echo rand(1, 800000); ?>"></script>
  <script src="js/nomin/items.js?ver=<?php echo rand(1, 800000); ?>"></script>
  <script src="js/nomin/buildings.js?ver=<?php echo rand(1, 800000); ?>"></script>
  <script src="js/nomin/skills.js?ver=<?php echo rand(1, 800000); ?>"></script>
  <script src="js/nomin/utilities.js?ver=<?php echo rand(1, 800000); ?>"></script>
  <script src="js/nomin/game.js?ver=<?php echo rand(1, 800000); ?>"></script>
  <script src="js/nomin/animations.js?ver=<?php echo rand(1, 800000); ?>"></script>
  <script src="js/nomin/output.js?ver=<?php echo rand(1, 800000); ?>"></script>
  <script src="js/nomin/events.js?ver=<?php echo rand(1, 800000); ?>"></script>
  <script src="js/nomin/planets.js?ver=<?php echo rand(1, 800000); ?>"></script>
  <link rel='stylesheet' id='game-css'  href='css/style.css?ver=<?php echo rand(1, 800000); ?>' type='text/css' media='all' />
  -->
  <!-- Static Content -->
  <script>
    var game = new Object();
    (function($) {
      $(document).ready(function(){
        game = $('body').goldenminer({});
      });
    })(jQuery);  
  </script>
  <title></title>
  </head>
  <body>
  
  <!-- *** FB tags START *** -->
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=127270404030893";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
  <!-- *** FB tags END *** -->
  
  
  <!-- *** Menu START *** -->
  <div id='top'>
  
  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <!-- GM top -->
  <ins class="adsbygoogle"
       style="display:inline-block;width:320px;height:50px"
       data-ad-client="ca-pub-3551157714455554"
       data-ad-slot="9027408224"></ins>
  <script>
  (adsbygoogle = window.adsbygoogle || []).push({});
  </script>
  
    <span class='version'>v0.30</span>
    <ul id="nav">
        <li><a>Faq & Info</a>
          <ul class="subs">
            <li><a id='faq' href='#'>FAQ & Info</a></li>
            <li><a id='wiki' target='_blank' href='http://the-golden-miner.wikia.com/wiki/The_Golden_Miner_Wiki'>Wiki</a>
            <li><a id='subreddit' target='_blank' href='http://www.reddit.com/r/TheGoldenMiner/'>Subreddit</a>
            <li><a id='updates' href='#'>Updates</a>
          </ul>
        </li>
        <li><a>Options</a>
          <ul class="subs">
            <li><a id='save' href='#'>Save</a></li>
            <li><a id='esave' href='#'>Export Save</a></li> 
            <li><a id='isave' href='#'>Import Save</a></li>
            <li><a id='reset' href='#'>Reset Game</a> </li>       
          </ul>
        </li>
      </li>
      <li><a>Contact</a>
          <ul class="subs">
            <li><a target='_blank' href='https://twitter.com/ernest_marcinko'>Twitter</a></li>
            <li><a target='_blank' href='https://www.facebook.com/pages/The-Golden-Miner/452517451528969?ref=hl'>Facebook</a></li>
            <li><a target='_blank' href='http://www.reddit.com/r/TheGoldenMiner/'>Reddit</a></li>
            <li><a id='contact' href='mailto:ernest.marcinko@gmail.com'>Mail</a></li> 
          </ul>
      </li>
    </ul>
    <div class='donatetop'>
      <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
      <input type="hidden" name="cmd" value="_donations">
      <input type="hidden" name="business" value="ernest.marcinko@gmail.com">
      <input type="hidden" name="lc" value="SK">
      <input type="hidden" name="item_name" value="goldenminer.org">
      <input type="hidden" name="no_note" value="0">
      <input type="hidden" name="currency_code" value="USD">
      <input type="hidden" name="bn" value="PP-DonationsBF:btn_donate_LG.gif:NonHostedGuest">
      <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
      <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
      </form>

      <p>Help me to keep this game updated :)</p>
    </div>

    <div id="share-buttons"> 
    <!-- 
    <a href="http://www.facebook.com/sharer.php?u=http://goldenminer.org" target="_blank"><img src="http://www.simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" /></a> 
    
    <a href="http://twitter.com/share?url=http://goldenminer.org&text=The Golden Miner game" target="_blank"><img src="http://www.simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" /></a>
    -->
      <img src='http://goldenminer.org/css/images/heart.png?v=1' id='heart' />
    </div>    
    
  </div>
  <!-- *** Menu END *** -->

  
  <!-- *** Overlay START *** -->
  <div id='moverlay'></div>
  <!-- *** Overlay END *** -->

  <!-- *** Updates window START *** -->
  <div id='updatesw' class='box height450'>
    <div class='closeButton'></div>
    <h4>Important</h4>
    <ul>
      <li>Expect to see major changes in items and minions.</li>
    </ul>
    <h4>Upcoming updates</h4>
    <ul>
      <li>Achievments</li>
    </ul>
    <h4>Update v0.30 - 2013.10.17</h4>
    <ul>
      <li>Global reset - if you refresh your browser all your changes will be lost.</li>
      <li>selling minions disabled</li>
      <li>more legendaries (added about 50 more)</li>
      <li>all equippable items will have 1-3 sockets</li>
      <li>gems: [ruby, amethyst, diamond, sapphire, starstone] in 4 sizes  [tiny, small, big, giant]</li>
      <li>to insert a gem into a socketed item: move the desired gem (from stash) over an equipped item</li>
      <li>Extended gameplay: planets - on a certain level you must travel to another planet to start a new mine with possible negative consequences</li>
    </ul>
    <h4>Update v0.29 - 2013.10.01</h4>
    <ul>
      <li>Added: Potion disappear fix</li>
      <li>Modified: Reversed stash and find order</li>
      <li>Added: auto stash sorting</li>
      <li>Added: alt+click for sell</li>
      <li>Added: drink all potions at once</li>
      <li>Modified: trainer skill change </li>
      <li>Modified: gold/dia potions nerfed to 1% </li>
      <li>Added: sacrifice gold/diamond for xp/sec</li>
      <li>Added: auto sell scrolls in mining options</li>
      <li>Added: xp/second counter</li>
      <li>Added: spirit golem</li>
    </ul>
    <h4>Update v0.27 - 2013.09.29</h4>
    <ul>
      <li>New scroll: Amnesia scroll</li>
      <li>Double click now consumes a potion</li>
      <li>Items in inventory can be organised</li>
    </ul>
    <h4>Update v0.25 - 2013.09.27</h4>
    <ul>
      <li>New tab: Statistics</li>
      <li>New minion: The dwarf King</li>
      <li>New higher class items</li>
      <li>Lost focus tab fix</li>
      <li>Building description fixes</li>
    </ul>
    <h4>Update v0.20 - 2013.09.24</h4>
    <ul>
      <li>New items: Potions</li>
      <li>New higher class items</li>
      <li>New: Buildings</li>
      <li>Nerfed some items</li>
      <li>Gamble price changed</li>
    </ul>
    <h4>Update v0.18 - 2013.09.20</h4>
    <ul>
      <li>CPU safe option in mining options tab</li>
      <li>Extra % experience attribute can appear on items</li>
      <li>Gamble prices highered</li>
      <li>Spelling mistakes fixed</li>
      <li>Minions gold/s and diamonds/s nerfed</li>
      <li>Some item attributes nerfed</li>
    </ul>
    <h4>Initial Release - 2013.09.19</h4>
    <ul>
      <li>Unbalanced, buggy as hell.</li>
    </ul>   
  </div>
  <!-- *** Updates window END *** -->


  <!-- *** Export Save window START *** -->
  <div id='faqw' class='box'>
    <div class='closeButton'></div>
    <h4>Quick Tips</h4>
    <ul>
      <li>Cheating ruins the fun :)</li>
      <li>You can click on the mine to get extra gold and diamonds.</li>
      <li>Before gambling, make sure you have a cashflow.</li>
      <li>Gold is more important in the beggining than diamonds.</li>
      <li>Aim for a high magic find late game.</li>
      <li>You can quickly sell an item by holding CTRL while clicking on it.</li>
    </ul>
    <h4>Item qualities</h4>
      <div class='item itemquality1 itemtype1 middle'></div> <b>Magic item</b> - drops by 80% chance, has 2 random attibutes <br />
      <div class='item itemquality2 itemtype1 middle'></div> <b>Rare item</b> - drops by 15% chance, has 2 random improved attibutes <br />
      <div class='item itemquality3 itemtype1 middle'></div> <b>Legendary item</b> - drops by 2% chance, has 3+ random attibutes <br />
      <div class='item itemquality10 itemtype5 middle'></div> <b>Scroll</b> - drops by 3% chance can craft into a high-class item <br />
    <h4>Crafting</h4>
      <p>You can craft a scroll into a corresponding item with a diamond cost. The crafted item will appear in your stash.</p>
      <p>Be aware, that scrolls found in high level are more expensive to craft.</p>  
  </div>
  <!-- *** Export Save window END *** -->

  
  <!-- *** Export Save window START *** -->
  <div id='exsave' class='box'>
    <div class='closeButton'></div>
    <p>Copy this text somewhere:</p>
    <textarea>
    
    </textarea>
  </div>
  <!-- *** Export Save window END *** -->
 
  
  <!-- *** Import Save window START *** -->
  <div id='imsave' class='box'>
    <div class='closeButton'></div>
    <p>Paste the exported test here:</p>
    <textarea></textarea>
    <a href='#' class='load'>Load</a>
  </div>
  <!-- *** Import Save window END *** -->

  
  <!-- *** Mining Options window START *** -->
  <div id='moptions' class='box'>
      <div class='closeButton'></div>
      <h4>Mining Options</h4>
      <div class="onOff"><div id='enableFancyAnim' class='onOffInner'></div></div>
        <span class='option'>Enable fancy animations.</span>
        <span class='optdesc'>Turned on by default, will lower the your CPU usage if disabled.</span>
      <div class='separator'></div>
      <div class="onOff"><div id='stopOnInvFull' class='onOffInner'></div></div>
        <span class='option'>Stop mining, when the latest finds or the inventory is full.</span>
        <span class='optdesc'>If disabled, then will automatically sell the oldest found item.</span>
      <div class='separator'></div>
      <div class="onOff"><div id='autoSellMagic' class='onOffInner'></div></div>
        <span class='option'>Automatically sell all <span class='magic'>Magic</span> items found.</span>
        <span class='optdesc'>Good if you are running the miner overnight and want to keep some space.</span>
      <div class='separator'></div>
      <div class="onOff"><div id='autoSellRare' class='onOffInner'></div></div>
        <span class='option'>Automatically sell all <span class='rare'>Rare</span> items found.</span>
        <span class='optdesc'>Good if you are running the miner overnight and want to keep some space.</span>
      <div class='separator'></div>
      <div class="onOff"><div id='autoStashLegendary' class='onOffInner'></div></div>
        <span class='option'>Stash all <span class='legendary'>Legendary</span> items found automatically.</span>
        <span class='optdesc'>Will save you more space.</span>
      <div class='separator'></div>
      <div class="onOff"><div id='autoSellMagicScrolls' class='onOffInner'></div></div>
        <span class='option'>Automatically sell all <span class='magic'>Magic</span> scrolls found.</span>
        <span class='optdesc'>Good if you are running the miner overnight and want to keep some space.</span>
      <div class='separator'></div>
      <div class="onOff"><div id='autoSellRareScrolls' class='onOffInner'></div></div>
        <span class='option'>Automatically sell all <span class='rare'>Rare</span> scrolls found.</span>
        <span class='optdesc'>Good if you are running the miner overnight and want to keep some space.</span>
      <div class='separator'></div>
      <div class="onOff"><div id='autoStashOthers' class='onOffInner'></div></div>
        <span class='option'>Stash all remaining scrolls & potions & gems found automatically.</span>
        <span class='optdesc'>Will save you more space.</span>
      <div class='separator'></div>
  </div>
  <!-- *** Mining Options window END *** -->
  
  
  <!-- *** Column 1 START *** -->
  <div class='third'>
    <div id='stats' class='box'>
      <div class='ptime left'>Game time:</div><div id='ptime' class='ptime right'>0</div>
      <div class='planet left'>Planet:</div><div id='planet' class='planet right'>Earth</div>
      <div class='clear'></div>
      <div class="progress-bar blue stripes">
          <span id='xpbar' style="width: 40%"></span>
          <div class='stats'>
            <div class='level'>Level:</div><div id='level'>1</div>
            <div class='xp'>Experience:</div><div id='xp'>0</div>
          </div>
      </div>
      <div class='skill left'>Remaining skill points:</div><div id='skill' class='skill right'>1</div>
      <div class='clear'></div>
      <div id='skills'>
           <div class='skill skill0' skillid=0>
              <p class='level'>0</p>
              <div class='details'>
                Skill details here.
              </div>
           </div>
           <div class='skill skill1' skillid=1>
              <p class='level'>0</p>
              <div class='details'>
                Skill details here.
              </div>
           </div>
           <div class='skill skill2' skillid=2>
              <p class='level'>0</p>
              <div class='details'>
                Skill details here.
              </div>
           </div>
           <div class='skill skill3' skillid=3>
              <p class='level'>0</p>
              <div class='details'>
                Skill details here.
              </div>
           </div>
           <div class='clear'></div>
      </div>
      <div class='mid'>
        <a href='#' class='moptions'>Mining Options</a>
        <a href='#' id='leaveplanet' class='leaveplanet infinitePulse'>Leave current planet</a>
        <!-- <a href='#' class='mining'>Stop mining</a> -->
      </div>
    </div>
    
    <div id='mines'>
        <div class='goldDiamond'>
          <div class='gold left'>Gold:</div><div id='gold' class='gold right'>0</div>
          <div class='diamonds left'>Diamonds:</div><div id='diamond' class='diamonds right'>0</div>
          <div class='clear'></div>
          <div class='hr'></div>
          <div class='golds left'>Gold/s:</div><div id='golds' class='golds right'>0.0001</div>
          <div class='diamondss left'>Diamonds/s:</div><div id='diamonds' class='diamondss right'>0</div>
          <div class='clickeff left'>Click Efficiency:</div><div id='clickeff' class='clickeff right'>5%</div>
          <div class='mfs left'>Magic find/s:</div><div id='mfs' class='mfs right'>0.0001%</div>
          <div class='xps left'>Experience/s:</div><div id='xps' class='xps right'>1</div>
          <div class='clear'></div>
        </div>
       <div class="goldcoin"></div>
       <div class="goldcoin"></div>
       <div class="goldcoin"></div>
       <div class="goldcoin"></div>
       <div class="goldcoin"></div>
       <div class="goldcoin"></div>
       <div class="goldcoin"></div>
       <div class="goldcoin"></div>
       
       <div class="diamondcoin"></div>
       <div class="diamondcoin"></div>
       <div class="diamondcoin"></div>
       <div class="diamondcoin"></div>
       <div class="diamondcoin"></div>
       <div class="diamondcoin"></div>
       <div class="diamondcoin"></div>
       <div class="diamondcoin"></div>       
    </div>
  </div>
  <!-- *** Column 1 END *** -->
  
  
  <!-- *** Column 2 START *** -->
  <div class='third'>
    <h3>Feeling lucky?</h3>
    <div id='gamble' class='box'>
       <a class='gamble' href='#'>Gamble</a>
       <span id='gamblecost'>0</span> 
       <select id='gamblecurrency'>
          <option value='0'>Gold</option>
          <option value='1'>Diamonds</option>
       </select>
       for a random quality  
       <select id='gambleitem'>
          <option value='0'>Pickaxe</option>
          <option value='1'>Armor</option>
          <option value='2'>Helm</option>
          <option value='3'>Ring</option>
          <option value='4'>Amulet</option>
       </select>
    </div>
    <a href='#' class='minions active'>Minions</a>
    <a href='#' class='buildings'>Buildings</a>
    <a href='#' class='statistics'>Statistics</a>
    <div id='minions' class='box'>
      

    </div>
    <div id='buildings' class='box'>
      

    </div>
    <div id='statistics' class='box'>
       <h4>Gold & Diamonds</h4>
          <ul>
              <li>Mine Clicks: <span id='clicks'>0</span></li>
              <li>Total gold: <span id='totalGold'>0</span></li>
              <li>Gold clicked: <span id='clickGold'>0</span></li>
              <li>Gold mined: <span id='minedGold'>0</span></li>
              <li>Gold from selling items: <span id='itemSoldGold'>0</span></li>
              <li>Total diamonds: <span id='totalDiamonds'>0</span></li>
              <li>Diamonds clicked: <span id='clickDiamonds'>0</span></li>
              <li>Diamonds mined: <span id='minedDiamonds'>0</span></li>
          </ul>
       <h4>Items</h4>
          <ul>
              <li>Items found: <span id='itemsFound'>0</span></li>
              <li>Items gambled: <span id='itemsGambled'>0</span></li>
              <li>Items sold: <span id='itemsSold'>0</span></li>
              <li>Items Crafted: <span id='itemsCrafted'>0</span></li>
              <li>Magic items found: <span id='magicItemsFound'>0</span></li>
              <li>Rare items found: <span id='rareItemsFound'>0</span></li>
              <li>Legendary items found: <span id='legendaryItemsFound'>0</span></li>
              <li>Magic items crafted: <span id='magicItemsCrafted'>0</span></li>
              <li>Rare items crafted: <span id='rareItemsCrafted'>0</span></li>
              <li>Legendary items crafted: <span id='legendaryItemsCrafted'>0</span></li>
              <li>Magic items gambled: <span id='magicItemsGambled'>0</span></li>
              <li>Rare items gambled: <span id='rareItemsGambled'>0</span></li>
              <li>Legendary items gambled: <span id='legendaryItemsGambled'>0</span></li>
          </ul>
       <h4>Scrolls & Potions</h4>
          <ul>
              <li>Scrolls found: <span id='scrollsFound'>0</span></li>
              <li>Scrolls gambled: <span id='scrollsGambled'>0</span></li>
              <li>Potions found: <span id='potionsFound'>0</span></li>
              <li>Potions gambled: <span id='potionsGambled'>0</span></li>
              <li>Potions drinked: <span id='potionsDrinked'>0</span></li>
          </ul>
    </div>
  </div>
  
  <!-- *** Column 2 END *** -->
  
  
  <!-- *** Column 3 START *** -->
  <div class='third last'>
    <div id='equipment' class='tthird'>
      <div id='character'>
        <div class='eq' id='eqweapon' type=0></div>
        <div class='eq' id='eqarmor' type=1></div>
        <div class='eq' id='eqhelm' type=2></div>
        <div class='eq' id='eqring' type=3></div>
        <div class='eq' id='eqamulet' type=4></div>
      </div>
    </div>
    <div id='finds' class='tthird'>
       <h4>Latest Finds <span class='count'>(0/250)</span></h4>
       <div class='content box'>
       
       </div>
    </div>
    <div id='stash' class='tthird last'>
       <h4>Stash <span class='count'>(0/250)</span></h4>
       <a href='#' order='0' id='sort' class='sort'>Sort stash</a>
       <a href='#' id='drinkall' class='drinkall'>Drink all Potions</a>
       <div class='content box'>
       
       </div>    
    </div>
  </div>
  <!-- *** Column 3 END *** -->
  
  <div class='clear'></div>
  
  
  <!-- *** Equipped overlay window START *** -->
  <div id='ifequipped'>
    <h4>Stat changes if equipped</h4>
    <div class='content'>
    
    </div>
  </div>
  <!-- *** Equipped overlay window END *** -->
  
  <div class='arrow_box' id='arrow_box'>
    <p>
    <iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FThe-Golden-Miner%2F452517451528969&amp;width=100&amp;height=21&amp;colorscheme=light&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;send=false&amp;appId=470596109688127" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100px; height:21px;" allowTransparency="true"></iframe>
    </p>
    <p>
    <a href="https://twitter.com/ernest_marcinko" class="twitter-follow-button" data-show-count="false" data-show-screen-name="false">Follow @ernest_marcinko</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
    </p>
    <p>
     <iframe class="btn" border="0" allowtransparency="true" src="http://platform.tumblr.com/v1/follow_button.html?button_type=2&tumblelog=anag0&color_scheme=light" frameborder="0" height="25" scrolling="no" width="113"></iframe>
    </p>
    <p>
    <a href="http://www.reddit.com/submit" onclick="window.location = 'http://www.reddit.com/submit?url=' + encodeURIComponent(window.location); return false"> <img src="http://www.reddit.com/static/spreddit7.gif" alt="submit to reddit" border="0" /> </a>
    </p>
  </div>
  
  <!-- *** Analytics START *** -->
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  
    ga('create', 'UA-44181223-1', 'goldenminer.org');
    ga('send', 'pageview');
  
    setInterval(function() {
      ga('send', 'pageview');
    }, 60000);
  </script>
  <!-- *** Analytics END *** -->
  </body>
</html>
