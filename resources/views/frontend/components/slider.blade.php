<div class="heroslider-area" data-bgimage="{{ Storage::url($sliders[0]->image_path) }}" data-black-overlay="3">
    <div class="heroslider-slider heroslider-animated tm-slider-dots tm-slider-dots-left" data-white-overlay="7">
        @foreach ($sliders as $slider)
            <div class="heroslider-singleslider d-flex align-items-center">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-md-6 col-12 order-2 order-md-1">
                            <div class="heroslider-content">
                                <h1>{{ $slider->title }}</h1>
                                <p>{{ $slider->description }}</p>
                                <a href="#{{ $slider->link }}" class="tm-button">About Us</a>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6 col-sm-8 col-12 order-1 order-md-2">
                            <div class="heroslider-image">
                                <svg viewBox="0 0 665 645">
                                    <defs>
                                        <pattern id="attachedImage1" height="100%" width="100%"
                                            patternContentUnits="objectBoundingBox">
                                            <image xlink:href="assets/images/heroslider/heroslider-image-1.jpg"
                                                preserveAspectRatio="none" width="1" height="1" />
                                        </pattern>
                                    </defs>
                                    <path fill="url(#attachedImage1)"
                                        d="M277.030,1.101 C452.838,-10.886 534.393,78.587 579.557,198.565 C624.722,318.542 691.616,359.832 645.425,497.920 C599.233,636.008 432.396,654.275 367.205,638.129 C302.015,621.984 234.375,580.155 153.191,548.742 C32.427,502.014 2.584,440.527 0.176,379.950 C-3.230,294.260 41.806,284.689 56.287,190.747 C73.638,78.186 139.502,10.477 277.030,1.101 Z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
