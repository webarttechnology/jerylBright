function maudio(_opt){
  var opt = {
    obj : _opt.obj ? _opt.obj : 'audio',
    fastStep : _opt.fastStep ? _opt.fastStep : 10
  }
  opt.tpl = '\
    <div class="maudio">\
      <audio src="" initaudio="false"></audio>\
      <div class="audio-control">\
          <a href="javascript:;" class="fast-reverse"></a>\
          <a href="javascript:;" class="play"></a>\
          <a href="javascript:;" class="fast-forward"></a>\
          <div class="progress-bar">\
              <div class="progress-pass"></div>\
          </div>\
          <div class="time-keep">\
              <span class="current-time">00:00</span> <span class="duration">00:00</span>\
          </div>\
          <a class="mute"></a>\
          <div class="volume-bar">\
              <div class="volume-pass"></div>\
          </div>\
      </div>\
    </div>'
  // var currentAudio,currentAudioBox

  var thisWindow = $(opt.obj).parents(window)

  if (!$(opt.obj).parent('.maudio').length || !$(opt.obj).next('div.audio-control').length) {
    window.tDuration = window.tDuration ? window.tDuration : {}
    $(opt.obj).each(function(i){
      $(this).before(opt.tpl)
      var thisBox = $(this).prev('div.maudio')
      var thisAudio = thisBox.children('audio')[0]
      thisAudio.src = $(this).attr('src') || $(this).children('source').attr('src')
      window.tDuration[opt.obj + thisAudio.src + '_' + i] = setInterval(function(){
        if(thisAudio.duration){
          thisBox.find('.time-keep .duration').text(timeFormat(thisAudio.duration))
          clearInterval(window.tDuration[opt.obj + thisAudio.src + '_' + i])
        }
      },100)
      $(this).remove()
    })
  }


  function progressBar(audio,pgp){
    var p = 100*currentAudio.currentTime/currentAudio.duration
    currentAudioBox.find('.progress-pass').css({'width':p + '%'})
    currentAudioBox.find('.current-time').text(timeFormat(currentAudio.currentTime))
    if(currentAudio.currentTime >= currentAudio.duration){
      currentAudioBox.removeClass('playing')
      clearInterval(t)
    }
  }

  function bindAudioCtrl(){
    $(thisWindow).find('.audio-control .play').off('click')
    $(thisWindow).find('.audio-control .play').on('click', function(){
      var audioBox = $(this).parent('.audio-control').parent('.maudio')
      var audio = audioBox.children('audio')[0]
      if(audioBox.hasClass('playing')){
        audio.pause()
        audioBox.removeClass('playing')
      }else{
        $(thisWindow).find('.playing').each(function(){
          $(this).children('audio')[0].pause()
          $(this).removeClass('playing')
        })
        audio.play()
        audioBox.addClass('playing')
        currentAudio = audio
        currentAudioBox = audioBox
        window.t = window.setInterval(function(){
          progressBar()
        },500)
      }
    })
    $(thisWindow).find('.audio-control .fast-reverse').off('click')
    $(thisWindow).find('.audio-control .fast-reverse').on('click', function(){
      currentAudio.currentTime -= opt.fastStep
    })
    $(thisWindow).find('.audio-control .fast-forward').off('click')
    $(thisWindow).find('.audio-control .fast-forward').on('click', function(){
      currentAudio.currentTime += opt.fastStep
    })
    $(thisWindow).find('.audio-control .volume-bar').off('click')
    $(thisWindow).find('.audio-control .volume-bar').on('click', function(e){
      var audioBox = $(this).parent('.audio-control').parent('.maudio')
      var audio = audioBox.children('audio')[0]
      var p = e.offsetX / audioBox.find('.volume-bar').width()
      audioBox.find('.volume-pass').css({"width":p * 100 + '%'})
      audio.volume = p > 1 ? 1 : p
    })
    $(thisWindow).find('.audio-control .mute').off('click')
    $(thisWindow).find('.audio-control .mute').on('click', function(e){
      var audioBox = $(this).parent('.audio-control').parent('.maudio')
      var audio = audioBox.children('audio')[0]
      if($(this).hasClass('muted')){
        audio.muted = false
        $(this).removeClass('muted')
      }else{
        audio.muted = true
        $(this).addClass('muted')
      }
    })
    $(thisWindow).find('.audio-control .progress-bar').off('click')
    $(thisWindow).find('.audio-control .progress-bar').on('click', function(e){
      var audioBox = $(this).parent('.audio-control').parent('.maudio')
      var audio = audioBox.children('audio')[0]
      var p = e.offsetX / audioBox.find('.progress-bar').width()
      audioBox.find('.progress-pass').css({"width":p * 100 + '%'})
      audio.currentTime = audio.duration * p
      audioBox.find('.current-time').text(timeFormat(audio.currentTime))
    })
    $(thisWindow).find('.maudio audio').off('play')
    $(thisWindow).find('.maudio audio').on('play', function () {
      if (!$(this).parent('.maudio').hasClass('playing')) {
        $(this).parent('.maudio').addClass('playing')
      }
    })
    $(thisWindow).find('.maudio audio').off('pause')
    $(thisWindow).find('.maudio audio').on('pause', function () {
      if ($(this).parent('.maudio').hasClass('playing')) {
        $(this).parent('.maudio').removeClass('playing')
      }
    })

  }
  bindAudioCtrl()

  function timeFormat(sec){
    var m = parseInt(sec/60)
    var s = parseInt(sec%60)
    return (m < 10 ?  '0' + m : m)+ ':' + (s < 10 ?  '0' + s : s)
  }
}


maudio({
    obj:'audio',
    fastStep:10
});