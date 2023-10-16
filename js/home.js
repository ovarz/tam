$('.antb-list').AcmeTicker({
  type:'marquee',
  direction:'left',
  speed:0.08,
});



var slide_banner = tns({
  container:'.home-banner-container',
  speed:333,
  items:5,
  gutter:5, 
  edgePadding:0,
  controls:true,
  nav:true,
  navPosition:'bottom',
  mouseDrag:true,
  autoplay:false,
  responsive:{
    768:{
      items:1,
    },
  },
});