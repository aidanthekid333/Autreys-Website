jQuery("#gallery").justifiedGallery({
    captions: true,
    margins: 5,
    border: 5,
    rowHeight: 180,
    randomize: true,
  })
  .on("jg.complete", function () {
    window.lightGallery(
      document.getElementById("gallery"),
      {
        autoplayFirstVideo: false,
        pager: false,
        galleryId: "nature",
        plugins: [lgZoom, lgThumbnail],
        mobileSettings: {
        controls: false,
        showCloseIcon: false,
        download: false,
        rotate: false
        }
      }
    );
  });