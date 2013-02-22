<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name . ' - EInnerFade';
$this->breadcrumbs = array(
    'EInnerFade',
);
?>
<h1>
    InnerFade with JQuery
</h1>

<h2>What is it?</h2>
<p>InnerFade is a small plugin for the <a href="http://jquery.com" title="Visit jQuery and learn more about this awesome JavaScript-Library">jQuery-JavaScript-Library</a>. It's designed to fade you any element inside a container in and out.</p>
<p>These elements could be anything you want, e.g. images, list-items, divs. Simply produce your own slideshow for your portfolio or advertisings. Create a newsticker or do an animation.</p>

<h2>The call</h2>

<code>
    $(&#39;<strong>ID or class of the element containing the fading objects</strong>&#39;).innerfade({
    animationtype: <strong>Type of animation &#39;fade&#39; or &#39;slide&#39; (Default: &#39;fade&#39;)</strong>,
    speed: <strong>Fadingspeed in milliseconds or keywords (slow, normal or fast)(Default: &#39;normal&#39;)</strong>,
    timeout: <strong>Time between the fades in milliseconds (Default: &#39;2000&#39;)</strong>,
    type: <strong>Type of slideshow: &#39;sequence&#39;, &#39;random&#39; or &#39;random_start&#39; (Default: &#39;sequence&#39;)</strong>,
    containerheight: <strong>Height of the containing element in any css-height-value (Default: &#39;auto&#39;)</strong>
    runningclass: <strong>CSS-Class which the container get’s applied (Default: &#39;innerfade&#39;)</strong>
    });
</code>

<code>
    &lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(
    function(){
    $('#news').innerfade({
    animationtype: 'slide',
    speed: 750,
    timeout: 2000,
    type: 'random',
    containerheight: '1em'
    });

    $('#portfolio').innerfade({
    speed: 'slow',
    timeout: 4000,
    type: 'sequence',
    containerheight: '220px'
    });

    $('.fade').innerfade({
    speed: 'slow',
    timeout: 1000,
    type: 'sequence',
    containerheight: '1.5em'
    });
    }
    );
    &lt;/script&gt;
</code>


<h2>Examples</h2>
<h3>A newsticker (with animationtype: 'slide')</h3>
<ul id="news">
    <li>
        <a href="#n1">1 Lorem ipsum dolor</a>
    </li>
    <li>
        <a href="#n2">2 Sit amet, consectetuer</a>
    </li>
    <li>
        <a href="#n3">3 Sdipiscing elit,</a>
    </li>
    <li>
        <a href="#n4">4 sed diam nonummy nibh euismod tincidunt ut</a>
    </li>
    <li>
        <a href="#n5">5 Nec Lorem.</a>
    </li>
    <li>
        <a href="#n6">6 Et eget.</a>
    </li>
    <li>
        <a href="#n7">7 Leo orci pede.</a>
    </li>
    <li>
        <a href="#n8">8 Ratio randorus wil.</a>
    </li>
</ul>

<code>
    &lt;ul id=&quot;news&quot;&gt;
    &lt;li&gt;
    &lt;a href=&quot;#n1&quot;&gt;1 Lorem ipsum dolor&lt;/a&gt;
    &lt;/li&gt;
    &lt;li&gt;
    &lt;a href=&quot;#n2&quot;&gt;2 Sit amet, consectetuer&lt;/a&gt;
    &lt;/li&gt;
    &lt;li&gt;
    &lt;a href=&quot;#n3&quot;&gt;3 Sdipiscing elit,&lt;/a&gt;
    &lt;/li&gt;
    &lt;li&gt;
    &lt;a href=&quot;#n4&quot;&gt;4 sed diam nonummy nibh euismod tincidunt ut&lt;/a&gt;
    &lt;/li&gt;
    &lt;li&gt;
    &lt;a href=&quot;#n5&quot;&gt;5 Nec Lorem.&lt;/a&gt;
    &lt;/li&gt;
    &lt;li&gt;
    &lt;a href=&quot;#n6&quot;&gt;6 Et eget.&lt;/a&gt;
    &lt;/li&gt;
    &lt;li&gt;
    &lt;a href=&quot;#n7&quot;&gt;7 Leo orci pede.&lt;/a&gt;
    &lt;/li&gt;
    &lt;li&gt;
    &lt;a href=&quot;#n8&quot;&gt;8 Ratio randorus wil.&lt;/a&gt;
    &lt;/li&gt;
    &lt;/ul&gt;
</code>

<h3>A list with images and links</h3>
<ul id="portfolio">
    <li>
        <a href="http://medienfreunde.com/deutsch/referenzen/kreation/good_guy__bad_guy.html"><img src="images/ggbg.gif" alt="Good Guy bad Guy" /></a>
    </li>
    <li>
        <a href="http://medienfreunde.com/deutsch/referenzen/kreation/whizzkids.html"><img src="images/whizzkids.gif" alt="Whizzkids" /></a>
    </li>
    <li>
        <a href="http://medienfreunde.com/deutsch/referenzen/printdesign/koenigin_mutter.html"><img src="images/km.jpg" alt="Königin Mutter" /></a>
    </li>
    <li>
        <a href="http://medienfreunde.com/deutsch/referenzen/webdesign/rt_reprotechnik_-_hybride_archivierung.html"><img src="images/rt_arch.jpg" alt="RT Hybride Archivierung" /></a>
    </li>
    <li>
        <a href="http://medienfreunde.com/deutsch/referenzen/kommunikation/tuev_sued_gruppe.html"><img src="images/tuev.jpg" alt="TÜV SÜD Gruppe" /></a>
    </li>
</ul>

<code>
    &lt;ul id=&quot;portfolio&quot;&gt;
    &lt;li&gt;
    &lt;a href=&quot;http://medienfreunde.com/deutsch/referenzen/kreation/good_guy__bad_guy.html&quot;&gt;
    &lt;img src=&quot;images/ggbg.gif&quot; alt=&quot;Good Guy bad Guy&quot; /&gt;
    &lt;/a&gt;
    &lt;/li&gt;
    &lt;li&gt;
    &lt;a href=&quot;http://medienfreunde.com/deutsch/referenzen/kreation/whizzkids.html&quot;&gt;
    &lt;img src=&quot;images/whizzkids.gif&quot; alt=&quot;Whizzkids&quot; /&gt;
    &lt;/a&gt;
    &lt;/li&gt;
    &lt;li&gt;
    &lt;a href=&quot;http://medienfreunde.com/deutsch/referenzen/printdesign/koenigin_mutter.html&quot;&gt;
    &lt;img src=&quot;images/km.jpg&quot; alt=&quot;K&ouml;nigin Mutter&quot; /&gt;
    &lt;/a&gt;
    &lt;/li&gt;
    &lt;li&gt;
    &lt;a href=&quot;http://medienfreunde.com/deutsch/referenzen/webdesign/rt_reprotechnik_-_hybride_archivierung.html&quot;&gt;
    &lt;img src=&quot;images/rt_arch.jpg&quot; alt=&quot;RT Hybride Archivierung&quot; /&gt;
    &lt;/a&gt;
    &lt;/li&gt;
    &lt;li&gt;
    &lt;a href=&quot;http://medienfreunde.com/deutsch/referenzen/kommunikation/tuev_sued_gruppe.html&quot;&gt;
    &lt;img src=&quot;images/tuev.jpg&quot; alt=&quot;T&Uuml;V S&Uuml;D Gruppe&quot; /&gt;
    &lt;/a&gt;
    &lt;/li&gt;
    &lt;/ul&gt;
</code>

<h3>Elements with classes</h3>
<div class="fade">
    <p>
        1
    </p>
    <p>
        2
    </p>
    <p>
        3
    </p>
    <p>
        4
    </p>
    <p>
        5
    </p>
    <p>
        6
    </p>
    <p>
        7
    </p>
    <p>
        8
    </p>
    <p>
        9
    </p>
    <p>
        10
    </p>
</div>

<div class="fade">
    <p>
        A
    </p>
    <p>
        B
    </p>
    <p>
        C
    </p>
    <p>
        D
    </p>
    <p>
        E
    </p>
    <p>
        F
    </p>
    <p>
        G
    </p>
    <p>
        H
    </p>
    <p>
        I
    </p>
    <p>
        J
    </p>
    <p>
        K
    </p>
    <p>
        L
    </p>
    <p>
        M
    </p>
    <p>
        N
    </p>
    <p>
        O
    </p>
    <p>
        P
    </p>
    <p>
        Q
    </p>
    <p>
        R
    </p>
    <p>
        S
    </p>
    <p>
        T
    </p>
    <p>
        U
    </p>
    <p>
        V
    </p>
    <p>
        W
    </p>
    <p>
        X
    </p>
    <p>
        Y
    </p>
    <p>
        Z
    </p>
</div>

<code>
    &lt;div class=&quot;fade&quot;&gt;
    &lt;p&gt;
    1
    &lt;/p&gt;
    &lt;p&gt;
    2
    &lt;/p&gt;
    &lt;p&gt;
    3
    &lt;/p&gt;
    &lt;p&gt;
    4
    &lt;/p&gt;
    &lt;p&gt;
    5
    &lt;/p&gt;
    &lt;p&gt;
    6
    &lt;/p&gt;
    &lt;p&gt;
    7
    &lt;/p&gt;
    &lt;p&gt;
    8
    &lt;/p&gt;
    &lt;p&gt;
    9
    &lt;/p&gt;
    &lt;p&gt;
    10
    &lt;/p&gt;
    &lt;/div&gt;

    &lt;div class=&quot;fade&quot;&gt;
    &lt;p&gt;
    A
    &lt;/p&gt;
    &lt;p&gt;
    B
    &lt;/p&gt;
    &lt;p&gt;
    C
    &lt;/p&gt;
    &lt;p&gt;
    D
    &lt;/p&gt;
    &lt;p&gt;
    E
    &lt;/p&gt;
    &lt;p&gt;
    F
    &lt;/p&gt;
    &lt;p&gt;
    G
    &lt;/p&gt;
    &lt;p&gt;
    H
    &lt;/p&gt;
    &lt;p&gt;
    I
    &lt;/p&gt;
    &lt;p&gt;
    J
    &lt;/p&gt;
    &lt;p&gt;
    K
    &lt;/p&gt;
    &lt;p&gt;
    L
    &lt;/p&gt;
    &lt;p&gt;
    M
    &lt;/p&gt;
    &lt;p&gt;
    N
    &lt;/p&gt;
    &lt;p&gt;
    O
    &lt;/p&gt;
    &lt;p&gt;
    P
    &lt;/p&gt;
    &lt;p&gt;
    Q
    &lt;/p&gt;
    &lt;p&gt;
    R
    &lt;/p&gt;
    &lt;p&gt;
    S
    &lt;/p&gt;
    &lt;p&gt;
    T
    &lt;/p&gt;
    &lt;p&gt;
    U
    &lt;/p&gt;
    &lt;p&gt;
    V
    &lt;/p&gt;
    &lt;p&gt;
    W
    &lt;/p&gt;
    &lt;p&gt;
    X
    &lt;/p&gt;
    &lt;p&gt;
    Y
    &lt;/p&gt;
    &lt;p&gt;
    Z
    &lt;/p&gt;
    &lt;/div&gt;
</code>

<h2>Download</h2>
<p><a href="http://medienfreunde.com/stats/getfile.php?id=3" ><strong>jquery.innerfade.zip</strong> (124kb)</a></p>

<p><a href="http://medienfreunde.com/deutsch/weblog/aus_der_praxis.html?nid=162">Back to the article</a><br /><br /><br /><br /></p>

<?php
$this->beginWidget('ext.EInnerFade.EInnerFade'
        , array(
    'element' => 'news',
    'containerHeight' => '1em',
        )
);
$this->endWidget();
$this->beginWidget('ext.EInnerFade.EInnerFade'
        , array(
    'element' => 'portfolio',
    'speed' => 'slow',
            'timeout' => 4000,
            'type' => 'sequence',
    'containerHeight' => '220px',
        )
);
$this->endWidget();
?>