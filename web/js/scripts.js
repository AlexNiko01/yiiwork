//vertical line----------------------
var controller = new ScrollMagic();
var tween = new TimelineMax()

//Show line and point
    .add(TweenMax.to(".section8 .punkt1", 0.3, {height:"30px", width: "30px"}))
    .add(TweenMax.to(".section8 .line1", 3, {height:"1128px"}));


// build scene
var scene = new ScrollScene({triggerElement: "#trigger11", reverse: false})
    .setTween(tween)
    .addTo(controller);

//horizontal line App-Store----------------------
TweenMax.set(".section8 .line2", {scaleX:0.001, transformOrigin:"0 50%"}); // Android scale line to 0
TweenMax.set(".section8 .line4", {scaleX:0.001, transformOrigin:"0 50%"}); // rotate scale line to 0
var tween2 = new TimelineMax()
//Show line and point
    .add(TweenMax.to(".section8 .line2", 0.4, {scaleX:-1, ease: Linear.easeNone, delay:0.4}))
    .add([
        TweenMax.to(".section8 .appstore1", 0.9, {css:{opacity:1}, delay:0.2}),
        TweenMax.to(".section8 .appstore2", 2, {css:{opacity:1}, repeat:22, yoyo:true}),
        TweenMax.to(".section8 .appstore3", 3, {css:{opacity:1}, repeat:16, yoyo:true}),
        TweenMax.to(".section8 .description1", 1.3, {css:{opacity:1}})

    ]);

// build scene
var scene = new ScrollScene({triggerElement: "#trigger11", reverse: false})
    .setTween(tween2)
    .addTo(controller);


//vertical line Internet----------------------
var tween3 = new TimelineMax()
//Show line and point
    .add(TweenMax.to(".section8 .line3", 0.4, {width:"250px", ease: Linear.easeNone, delay:0.7}))
    .add([
        TweenMax.to(".section8 .internet1", 0.9, {css:{opacity:1}, delay:0.6}),
        TweenMax.to(".section8 .internet2", 1.8, {css:{opacity:1}, repeat:18, yoyo:true}),
        TweenMax.to(".section8 .internet3", 2, {css:{opacity:1}, repeat:10, yoyo:true}) ,
        TweenMax.to(".section8 .internet4", 4, {css:{opacity:1}, repeat:12, yoyo:true}),
        TweenMax.to(".section8 .description2", 1, {css:{opacity:1}})
    ])
// build scene
var scene = new ScrollScene({triggerElement: "#trigger11", reverse: false})
    .setTween(tween3)
    .addTo(controller);


//vertical line enterprise appstore----------------------
var tween4 = new TimelineMax()
//Show line and point
    .add(TweenMax.to(".section8 .line4", 0.4, {scaleX:-1, ease: Linear.easeNone, delay:0.9}))
    .add([
        TweenMax.to(".section8 .e-appstore1", 0.8, {css:{opacity:1}, delay:0.2}),
        TweenMax.to(".section8 .e-appstore2", 2, {css:{opacity:1}, repeat:20, yoyo:true}),
        TweenMax.to(".section8 .description3", 1, {css:{opacity:1}})
    ])


// build scene
var scene = new ScrollScene({triggerElement: "#trigger11", reverse: false})
    .setTween(tween4)
    .addTo(controller);