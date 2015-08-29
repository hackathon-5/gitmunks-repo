<?php $this->set('body_class', 'add'); ?>
<div class="forms-container">
<div class="forms-content">
<form id="add">
    <div class="form-group current">
        <h3>Get recommendations for your trip</h3>
        <p>Alright, <?= $this->request->session()->read('Auth.User.firstname'); ?>, where do you want to go?</p>
        <div class="frame form-inline">
            <input type="text" name="city" placeholder="City" class="form-control" />
            <input type="text" name="state" placeholder="State/Region" class="form-control" />
            <input type="text" name="country" placeholder="Country" class="form-control tabbable" />
        </div>
    </div>
    <div class="form-group">
        <p>When are you going?</p>
        <input type="date" name="date" class="form-control" />

    </div>
    <div class="form-group">
        <p>Which travel experience best describes this trip?</p>

        <div class="checkbox-wrap">
        <input type="checkbox" name="travel_type" value="adventure" id="adventure" />
        <label for="adventure">Adventure</label>
        </div>
        <div class="checkbox-wrap">
        <input type="checkbox" name="travel_type" value="relaxing" id="relaxing"/>
        <label for="relaxing">Relaxing</label>
        </div>
        <div class="checkbox-wrap">
        <input type="checkbox" name="travel_type" value="off-the-beaten-path" id="path"/>
        <label for="path">Off the Beaten Path</label>
        </div>
        <div class="checkbox-wrap">
        <input type="checkbox" name="travel_type" value="special_events" id="special-events"/>
        <label for="special-events">Special Events</label>
        </div>
        <div class="checkbox-wrap">
        <input type="checkbox" name="travel_type" value="outdoors" id="outdoors"/>
        <label for="outdoors">Outdoors</label>
        </div>
        <div class="checkbox-wrap">
        <input type="checkbox" name="travel_type" value="family" id="family"/>
        <label for="family">Family-Friendly</label>
        </div>
    </div>
    <div class="form-group">
        <p>How would you describe your ideal trip in one sentence (less than 200 characters)</p>
        <textarea name="description" class="form-control"></textarea>
        <a data-url="/trips/add" class="btn main-button next complete">Get Recommendations</a>
    </div>
    <div class="form-group">
        <p>Super cool! I bet you will have a great trip. While you wait on some responses would you like to help some people coming to your area?</p>
        <a href="/account/users/index" class="btn main-button">Help Some Peeps</a> |
        <a href="/account/users/index" class="btn main-button">Go to My Account</a>
    </div>
</form>
<a class="btn main-button back">Back</a>
<a class="btn main-button next">Next</a>
</div>
</div>
