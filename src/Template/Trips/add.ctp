<?php $this->set('body_class', 'add'); ?>
<form id="add">
    <div class="form-group current">
        <h3>Get recommendations for your trip</h3>
        <p>Alright, [name], where do you want to go?</p>
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
        <input type="checkbox" name="travel_type" value="adventure" />
        <label>Adventure</label>

        <input type="checkbox" name="travel_type" value="relaxing" />
        <label>Relaxing</label>

        <input type="checkbox" name="travel_type" value="adventure" />
        <label>Off the Beaten Path</label>

        <input type="checkbox" name="travel_type" value="special_events" />
        <label>Special Events</label>

        <input type="checkbox" name="travel_type" value="outdoors" />
        <label>Outdoors</label>

        <input type="checkbox" name="travel_type" value="family" />
        <label>Family-Friendly</label>
    </div>
    <div class="form-group">
        <p>How would you describe your ideal trip in one sentence (less than 200 characters)</p>
        <textarea name="description" class="form-control"></textarea>
        <a class="btn btn-success next">Get Recommendations</a>
    </div>
    <div class="form-group">
        <p>Super cool! I bet you will have a great trip. While you wait on some responses would you like to help some people coming to your area?</p>
        <a href="/account/users/index" class="btn btn-success">Help Some Peeps</a> |
        <a href="/account/users/index" class="btn btn-default">Go to My Account</a>
    </div>
</form>
<a class="btn btn-default back">Back</a>
<a class="btn btn-default next">Next</a>