
    <!-- Load Scripts Start -->
    <script src="{{asset('js/libs.min.js')}}"></script>
    <script src="https://kit.fontawesome.com/f367a7b4c1.js" crossorigin="anonymous"></script>
    <script>
      gsap.registerPlugin(ScrollTrigger);

      const content = document.querySelector('body');
      const imgLoad = imagesLoaded(content);
      const svgBackground = document.querySelector("svg-background");

      imgLoad.on('done', instance => {

        document.getElementById("loaderContent").classList.add("fade-out");
        setTimeout(() => {
          document.getElementById("loader").classList.add("loaded");
        }, 300);

        gsap.set(".animate-headline", {y: 50, opacity: 0});
        ScrollTrigger.batch(".animate-headline", {
          interval: 0.1,
          batchMax: 4,
          duration: 6,
          onEnter: batch => gsap.to(batch, {
            opacity: 1,
            y: 0,
            ease: 'sine',
            stagger: {each: 0.15, grid: [1, 4]},
            overwrite: true
          }),
          onLeave: batch => gsap.set(batch, {opacity: 1, y: 0, overwrite: true}),
          onEnterBack: batch => gsap.to(batch, {opacity: 1, y: 0, stagger: 0.15, overwrite: true}),
          onLeaveBack: batch => gsap.set(batch, {opacity: 0, y: 50, overwrite: true})
        });

      });
    </script>


    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/gallery-init.js')}}"></script>
    <!-- Load Scripts End -->
