function changevideo(video){
  $('#main-video').find('#source').attr('src', video)
  $('#main-video')[0].load()
  $('#main-video')[0].play()
}
