zAccordion was originally made by Nate Armagost, and can be found at : http://www.armagost.com/zaccordion or https://github.com/natearmagost/zAccordion

Your HTML markup should look like this (assuming /images exists at site root):

```
<div id="slider">
    <p>
        <image src="/images/car.jpg" width="600" height="310" alt="" />
    </p>
    <p>
        <image src="/images/diner.jpg" width="600" height="310" alt="" />
    </p>
    <p>
        <image src="/images/gas.jpg" width="600" height="310" alt="" />
    </p>
    <p>
        <image src="/images/pool.jpg" width="600" height="310" alt="" />
    </p>
</div>
```

### zAccordion Options ###

* timeout: 6000, /* Time between each slide (in ms). */
* width: null, /* Width of the container. This option is required. */
* slideWidth: null, /* Width of each slide in pixels or width of each slide compared to a 100% container. */
* tabWidth: null, /* Width of each slide's "tab" (when clicked it opens the slide) or width of each tab compared to a 100% container. */
* height: null, /* Height of the container. This option is required. */
* startingSlide: 0, /* Zero-based index of which slide should be displayed. */
* slideClass: null, /* Class prefix of each slide. If left null, no classes will be set. */
* easing: null, /* Easing method. */
* speed: 1200, /* Speed of the slide transition (in ms). */
* auto: true, /* Whether or not the slideshow should play automatically. */
* trigger: "click", /* Event type that will bind to the "tab" (click, mouseover, etc.). */
* pause: true, /* Pause on hover. */
* invert: false, /* Whether or not to invert the slideshow, so the last slide stays in the same position, rather than the first slide. */
* animationStart: function () {}, /* Function called when animation starts. */
* animationComplete: function () {}, /* Function called when animation completes. */
* buildComplete: function () {}, /* Function called after the accordion is finished building. */
* errors: false /* Display zAccordion specific errors. */
