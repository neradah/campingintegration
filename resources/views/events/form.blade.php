{!! Form::open(array('url' => $form['url'], 'method' => $form['method'], 'class' => 'form-horizontal')) !!}

    <div class="form-group{!! ($errors->has('title')) ? ' has-error' : '' !!}">
        <label class="col-md-2 col-sm-3 col-xs-10 control-label" for="title">Event Title</label>
        <div class="col-lg-3 col-md-4 col-sm-5 col-xs-10">
            <input name="title" id="title" value="{!! Request::old('title', $form['defaults']['title']) !!}" type="text" class="form-control" placeholder="">
            {!! ($errors->has('title') ? $errors->first('title') : '') !!}
        </div>
    </div>
    
    @if(!$form['is-edit'])
        <div class="form-group{!! ($errors->has('slug')) ? ' has-error' : '' !!}">
            <label class="col-md-2 col-sm-3 col-xs-10 control-label" for="slug">Slug</label>
            <div class="col-lg-3 col-md-4 col-sm-5 col-xs-10">
                <input name="slug" id="slug" value="{!! Request::old('slug', $form['defaults']['slug']) !!}" type="text" class="form-control" placeholder="">
                {!! ($errors->has('slug') ? $errors->first('slug') : '') !!}
            </div>
        </div>
    @endif

    <div class="form-group{!! ($errors->has('type')) ? ' has-error' : '' !!}">
        <label class="col-md-2 col-sm-3 col-xs-10 control-label" for="type">Event Type</label>
        <div class="col-lg-3 col-md-4 col-sm-5 col-xs-10">
            <input name="type" id="type" value="{!! Request::old('type', $form['defaults']['type']) !!}" type="text" class="form-control" placeholder="">
            {!! ($errors->has('type') ? $errors->first('type') : '') !!}
        </div>
    </div>

    <div class="form-group{!! ($errors->has('country')) ? ' has-error' : '' !!}">
        <label class="col-md-2 col-sm-3 col-xs-10 control-label" for="country">Country</label>
        <div class="col-lg-3 col-md-4 col-sm-5 col-xs-10">
            <input name="country" id="country" value="{!! Request::old('country', $form['defaults']['country']) !!}" type="text" class="form-control" placeholder="">
            {!! ($errors->has('country') ? $errors->first('country') : '') !!}
        </div>
    </div>

    <div class="form-group{!! ($errors->has('location')) ? ' has-error' : '' !!}">
        <label class="col-md-2 col-sm-3 col-xs-10 control-label" for="location">Location</label>
        <div class="col-lg-3 col-md-4 col-sm-5 col-xs-10">
            <input name="location" id="location" value="{!! Request::old('location', $form['defaults']['location']) !!}" type="text" class="form-control" placeholder="">
            {!! ($errors->has('location') ? $errors->first('location') : '') !!}
        </div>
    </div>

    <div class="form-group{!! ($errors->has('start_date')) ? ' has-error' : '' !!}">
        <label class="col-md-2 col-sm-3 col-xs-10 control-label" for="start_date">Event Date</label>
        <div class="col-lg-3 col-md-4 col-sm-5 col-xs-10">
            <div class="input-group start_date">
                <input name="start_date" value="{!! Request::old('start_date', $form['defaults']['start_date']) !!}" type='text' class="form-control datetimepicker" placeholder="" data-format="DD/MM/YYYY">
                <span class="input-group-addon"><span class="fa fa-calendar fa-fw"></span></span>
            </div>
        </div>
        {!! ($errors->has('start_date') ? $errors->first('start_date') : '') !!}
    </div>

    <div class="form-group{!! ($errors->has('end_date')) ? ' has-error' : '' !!}">
        <label class="col-md-2 col-sm-3 col-xs-10 control-label" for="end_date">Event Date</label>
        <div class="col-lg-3 col-md-4 col-sm-5 col-xs-10">
            <div class="input-group end_date">
                <input name="end_date" value="{!! Request::old('end_date', $form['defaults']['end_date']) !!}" type='text' class="form-control datetimepicker" placeholder="" data-format="DD/MM/YYYY">
                <span class="input-group-addon"><span class="fa fa-calendar fa-fw"></span></span>
            </div>
        </div>
        {!! ($errors->has('end_date') ? $errors->first('end_date') : '') !!}
    </div>

    <label class="col-md-2 col-sm-3 col-xs-10 control-label" for="thumbnail_image">Add Thumbnail Image</label>
    <div class="image-section" data-init="cms-image-section">
        <div class="dropWrap">
            <div class="drop">
                <p>Drop Here</p>

                <a>Browse</a>
                <input type="file" name="thumbnail_image" class="upload-btn" multiple />
                <input name="thumbnail-image-name" type="hidden" class="image-name" value="{!! Request::old('thumbnail_image', $form['defaults']['thumbnail_image']) !!}">
            </div>

            <ul class="file-list">
                <!-- The file uploads will be shown here -->
            </ul>
        </div>
        <div class="image-container">
            @if(!empty(Request::old('thumbnail_image', $form['defaults']['thumbnail_image'])))
                <img src="{{URL::to('/').'/assets/uploads/'.Request::old('thumbnail_image', $form['defaults']['thumbnail_image']) }}" alt="">
            @endif
        </div>
    </div>

    <label class="col-md-2 col-sm-3 col-xs-10 control-label" for="header_image">Add Header Image</label>
    <div class="image-section" data-init="cms-image-section">
        <div class="dropWrap">
            <div class="drop">
                <p>Drop Here</p>

                <a>Browse</a>
                <input type="file" name="header_image" class="upload-btn" multiple />
                <input name="header-image-name" type="hidden" class="image-name" value="{!! Request::old('header_image', $form['defaults']['header_image']) !!}">
            </div>

            <ul class="file-list">
                <!-- The file uploads will be shown here -->
            </ul>
        </div>
        <div class="image-container">
            @if(!empty(Request::old('header_image', $form['defaults']['header_image'])))
                <img src="{{URL::to('/').'/assets/uploads/'.Request::old('header_image', $form['defaults']['header_image']) }}" alt="">
            @endif
        </div>
    </div>

    <div class="form-group{!! ($errors->has('early_bird_discount')) ? ' has-error' : '' !!}">
        <label class="col-md-2 col-sm-3 col-xs-10 control-label" for="early_bird_discount">Early Bird Discount</label>
        <div class="col-lg-3 col-md-4 col-sm-5 col-xs-10">
            <input name="early_bird_discount" id="early_bird_discount" value="{!! Request::old('early_bird_discount', $form['defaults']['early_bird_discount']) !!}" type="text" class="form-control" placeholder="">
            {!! ($errors->has('early_bird_discount') ? $errors->first('early_bird_discount') : '') !!}
        </div>
    </div>

    <div class="form-group{!! ($errors->has('home_featured_early_bird')) ? ' has-error' : '' !!}">
        <label class="col-md-2 col-sm-3 col-xs-10 control-label" for="home_featured_early_bird">Early Bird Feature</label>
        <div class="col-lg-3 col-md-4 col-sm-5 col-xs-10">
            <input class="make-switch" data-on-text="<i class='fa fa-check fa-inverse'></i>" data-off-text="<i class='fa fa-times'>" name="home_featured_early_bird" id="home_featured_early_bird" type="checkbox"{!! (Request::old('home_featured_early_bird', $form['defaults']['home_featured_early_bird']) == true) ? ' checked' : '' !!}>
            {!! ($errors->has('home_featured_early_bird') ? $errors->first('home_featured_early_bird') : '') !!}
        </div>
    </div>

    <div class="form-group{!! ($errors->has('home_list_featured')) ? ' has-error' : '' !!}">
        <label class="col-md-2 col-sm-3 col-xs-10 control-label" for="home_list_featured">Homepage Carousel</label>
        <div class="col-lg-3 col-md-4 col-sm-5 col-xs-10">
            <input class="make-switch" data-on-text="<i class='fa fa-check fa-inverse'></i>" data-off-text="<i class='fa fa-times'>" name="home_list_featured" id="home_list_featured" type="checkbox"{!! (Request::old('home_list_featured', $form['defaults']['home_list_featured']) == true) ? ' checked' : '' !!}>
            {!! ($errors->has('home_list_featured') ? $errors->first('home_list_featured') : '') !!}
        </div>
    </div>

    <h3>Add Campsite Information</h3>

    <div class="form-group{!! ($errors->has('campsite_info')) ? ' has-error' : '' !!}">
        <label class="col-md-2 col-sm-3 col-xs-10 control-label" for="campsite_info">About the Campsite</label>
        <div class="col-lg-6 col-md-8 col-sm-9 col-xs-12">
            <textarea name="campsite_info" type="text" class="form-control" data-provide="markdown" placeholder="" rows="10">{!! Request::old('campsite_info', $form['defaults']['campsite_info']) !!}</textarea>
            {!! ($errors->has('campsite_info') ? $errors->first('campsite_info') : '') !!}
        </div>
    </div>

    <label class="col-md-2 col-sm-3 col-xs-10 control-label" for="map_image">Map Image</label>
    <div class="image-section" data-init="cms-image-section">
        <div class="dropWrap">
            <div class="drop">
                <p>Drop Here</p>

                <a>Browse</a>
                <input type="file" name="map_image" class="upload-btn" multiple />
                <input name="map-image-name" type="hidden" class="image-name" value="{!! Request::old('map_image', $form['defaults']['map_image']) !!}">
            </div>

            <ul class="file-list">
                <!-- The file uploads will be shown here -->
            </ul>
        </div>
        <div class="image-container">
            @if(!empty(Request::old('map_image', $form['defaults']['map_image'])))
                <img src="{{URL::to('/').'/assets/uploads/'.Request::old('map_image', $form['defaults']['map_image']) }}" alt="">
            @endif
        </div>
    </div>

    <div class="form-group{!! ($errors->has('arrival_info')) ? ' has-error' : '' !!}">
        <label class="col-md-2 col-sm-3 col-xs-10 control-label" for="arrival_info">Arrival Information</label>
        <div class="col-lg-6 col-md-8 col-sm-9 col-xs-12">
            <textarea name="arrival_info" type="text" class="form-control" data-provide="markdown" placeholder="" rows="10">{!! Request::old('arrival_info', $form['defaults']['arrival_info']) !!}</textarea>
            {!! ($errors->has('arrival_info') ? $errors->first('arrival_info') : '') !!}
        </div>
    </div>

    <div class="form-group{!! ($errors->has('parking_info')) ? ' has-error' : '' !!}">
        <label class="col-md-2 col-sm-3 col-xs-10 control-label" for="parking_info">Parking</label>
        <div class="col-lg-6 col-md-8 col-sm-9 col-xs-12">
            <textarea name="parking_info" type="text" class="form-control" data-provide="markdown" placeholder="" rows="10">{!! Request::old('parking_info', $form['defaults']['parking_info']) !!}</textarea>
            {!! ($errors->has('parking_info') ? $errors->first('parking_info') : '') !!}
        </div>
    </div>

    <h3>2 Man Pre-Pitched Tent Information</h3>

    <div class="form-group{!! ($errors->has('two_man_price')) ? ' has-error' : '' !!}">
        <label class="col-md-2 col-sm-3 col-xs-10 control-label" for="two_man_price">Price</label>
        <div class="col-lg-3 col-md-4 col-sm-5 col-xs-10">
            <input name="two_man_price" id="two_man_price" value="{!! Request::old('two_man_price', $form['defaults']['two_man_price']) !!}" type="text" class="form-control" placeholder="">
            {!! ($errors->has('two_man_price') ? $errors->first('two_man_price') : '') !!}
        </div>
    </div>

    <div class="form-group{!! ($errors->has('two_actual')) ? ' has-error' : '' !!}">
        <label class="col-md-2 col-sm-3 col-xs-10 control-label" for="two_actual">2 Man Actual</label>
        <div class="col-lg-3 col-md-4 col-sm-5 col-xs-10">
            <input name="two_actual" id="two_actual" value="{!! Request::old('two_actual', $form['defaults']['two_actual']) !!}" type="text" class="form-control" placeholder="">
            {!! ($errors->has('two_actual') ? $errors->first('two_actual') : '') !!}
        </div>
    </div>

    <div class="form-group{!! ($errors->has('two_dummy')) ? ' has-error' : '' !!}">
        <label class="col-md-2 col-sm-3 col-xs-10 control-label" for="two_dummy">2 Man Dummy</label>
        <div class="col-lg-3 col-md-4 col-sm-5 col-xs-10">
            <input name="two_dummy" id="two_dummy" value="{!! Request::old('two_dummy', $form['defaults']['two_dummy']) !!}" type="text" class="form-control" placeholder="">
            {!! ($errors->has('two_dummy') ? $errors->first('two_dummy') : '') !!}
        </div>
    </div>

    <h3>4 Man Pre-Pitched Tent Information</h3>

    <div class="form-group{!! ($errors->has('four_man_price')) ? ' has-error' : '' !!}">
        <label class="col-md-2 col-sm-3 col-xs-10 control-label" for="four_man_price">Price</label>
        <div class="col-lg-3 col-md-4 col-sm-5 col-xs-10">
            <input name="four_man_price" id="four_man_price" value="{!! Request::old('four_man_price', $form['defaults']['four_man_price']) !!}" type="text" class="form-control" placeholder="">
            {!! ($errors->has('four_man_price') ? $errors->first('four_man_price') : '') !!}
        </div>
    </div>

    <div class="form-group{!! ($errors->has('four_actual')) ? ' has-error' : '' !!}">
        <label class="col-md-2 col-sm-3 col-xs-10 control-label" for="four_actual">4 Man Actual</label>
        <div class="col-lg-3 col-md-4 col-sm-5 col-xs-10">
            <input name="four_actual" id="four_actual" value="{!! Request::old('four_actual', $form['defaults']['four_actual']) !!}" type="text" class="form-control" placeholder="">
            {!! ($errors->has('four_actual') ? $errors->first('four_actual') : '') !!}
        </div>
    </div>

    <div class="form-group{!! ($errors->has('four_dummy')) ? ' has-error' : '' !!}">
        <label class="col-md-2 col-sm-3 col-xs-10 control-label" for="four_dummy">4 Man Dummy</label>
        <div class="col-lg-3 col-md-4 col-sm-5 col-xs-10">
            <input name="four_dummy" id="four_dummy" value="{!! Request::old('four_dummy', $form['defaults']['four_dummy']) !!}" type="text" class="form-control" placeholder="">
            {!! ($errors->has('four_dummy') ? $errors->first('four_dummy') : '') !!}
        </div>
    </div>

    <h3>6 Man Pre-Pitched Tent Information</h3>

    <div class="form-group{!! ($errors->has('six_man_price')) ? ' has-error' : '' !!}">
        <label class="col-md-2 col-sm-3 col-xs-10 control-label" for="six_man_price">Price</label>
        <div class="col-lg-3 col-md-4 col-sm-5 col-xs-10">
            <input name="six_man_price" id="six_man_price" value="{!! Request::old('six_man_price', $form['defaults']['six_man_price']) !!}" type="text" class="form-control" placeholder="">
            {!! ($errors->has('six_man_price') ? $errors->first('six_man_price') : '') !!}
        </div>
    </div>

    <div class="form-group{!! ($errors->has('six_actual')) ? ' has-error' : '' !!}">
        <label class="col-md-2 col-sm-3 col-xs-10 control-label" for="six_actual">6 Man Actual</label>
        <div class="col-lg-3 col-md-4 col-sm-5 col-xs-10">
            <input name="six_actual" id="six_actual" value="{!! Request::old('six_actual', $form['defaults']['six_actual']) !!}" type="text" class="form-control" placeholder="">
            {!! ($errors->has('six_actual') ? $errors->first('six_actual') : '') !!}
        </div>
    </div>

    <div class="form-group{!! ($errors->has('six_dummy')) ? ' has-error' : '' !!}">
        <label class="col-md-2 col-sm-3 col-xs-10 control-label" for="six_dummy">6 Man Dummy</label>
        <div class="col-lg-3 col-md-4 col-sm-5 col-xs-10">
            <input name="six_dummy" id="six_dummy" value="{!! Request::old('six_dummy', $form['defaults']['six_dummy']) !!}" type="text" class="form-control" placeholder="">
            {!! ($errors->has('six_dummy') ? $errors->first('six_dummy') : '') !!}
        </div>
    </div>

    <h3>8 Man Pre-Pitched Tent Information</h3>

    <div class="form-group{!! ($errors->has('eight_man_price')) ? ' has-error' : '' !!}">
        <label class="col-md-2 col-sm-3 col-xs-10 control-label" for="eight_man_price">Price</label>
        <div class="col-lg-3 col-md-4 col-sm-5 col-xs-10">
            <input name="eight_man_price" id="eight_man_price" value="{!! Request::old('eight_man_price', $form['defaults']['eight_man_price']) !!}" type="text" class="form-control" placeholder="">
            {!! ($errors->has('eight_man_price') ? $errors->first('eight_man_price') : '') !!}
        </div>
    </div>

    <div class="form-group{!! ($errors->has('eight_actual')) ? ' has-error' : '' !!}">
        <label class="col-md-2 col-sm-3 col-xs-10 control-label" for="eight_actual">8 Man Actual</label>
        <div class="col-lg-3 col-md-4 col-sm-5 col-xs-10">
            <input name="eight_actual" id="eight_actual" value="{!! Request::old('eight_actual', $form['defaults']['eight_actual']) !!}" type="text" class="form-control" placeholder="">
            {!! ($errors->has('eight_actual') ? $errors->first('eight_actual') : '') !!}
        </div>
    </div>

    <div class="form-group{!! ($errors->has('eight_dummy')) ? ' has-error' : '' !!}">
        <label class="col-md-2 col-sm-3 col-xs-10 control-label" for="eight_dummy">8 Man Dummy</label>
        <div class="col-lg-3 col-md-4 col-sm-5 col-xs-10">
            <input name="eight_dummy" id="eight_dummy" value="{!! Request::old('eight_dummy', $form['defaults']['eight_dummy']) !!}" type="text" class="form-control" placeholder="">
            {!! ($errors->has('eight_dummy') ? $errors->first('eight_dummy') : '') !!}
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-offset-2 col-sm-offset-3 col-sm-10 col-xs-12">
            <button class="btn btn-primary" type="submit"><i class="fa fa-rocket"></i> {!! $form['button'] !!}</button>
        </div>
    </div>
{!! Form::close() !!}
