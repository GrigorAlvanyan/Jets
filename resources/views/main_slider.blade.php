<div class="main_section animation_block fade_animation">
    <div class="banner_inner">
        <div class="main_slider">
            @forelse($sliders as $slider)
                <div class="slide_block">
                    <div class="slide_img"><img src="images/slider1.png" alt="" title=""/></div>
                    <div class="slide_info">
                        <div class="info_inner">{{$slider->title}}</div>
                    </div>
                </div>
            @empty
            @endforelse
        </div>
        @include('form')
    </div>
</div>
