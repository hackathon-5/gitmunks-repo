<?php $this->set('body_class', 'register'); ?>r
<form id="registration">
    <div class="form-group current">
        <p>Hi there, welcome to Trek. What’s your name?</p>
        <input type="text" name="name" required="required" class="form-control tabbable" />
    </div>
    <div class="form-group">
        <div class="frame">
            <p>Hi, <span data-insert="name">Name</span>, it’s really great to meet you. Let’s get to know each other a little.</p>
        </div>
        <div class="frame form-inline">
            <p>We live in Greenville, SC, USA. Where do you live?</p>
            <input type="text" name="city" placeholder="City" class="form-control" />
            <input type="text" name="state" placeholder="State/Region" class="form-control" />
            <input type="text" name="country" placeholder="Country" class="form-control tabbable" />
        </div>

    </div>
    <div class="form-group">
        <p>Why would someone want to visit <span data-insert="city">City</span>?</p>
        <label>It’s foodie heaven</label>
        <input type="checkbox" name="why" value="food" />
        <label>A vibrant music scene</label>
        <input type="checkbox" name="why" value="music" />
<!--        <button class="btn btn-default">It’s foodie heaven</button>-->
<!--        <button class="btn btn-default">A vibrant music scene</button>-->
<!--        <button class="btn btn-default">The art community is thriving</button>-->
<!--        <button class="btn btn-default">The shopping is first-rate</button>-->
<!--        <button class="btn btn-default">Thrilling amusements</button>-->
<!--        <button class="btn btn-default">For the history</button>-->
<!--        <button class="btn btn-default">To landscape is beautiful.</button>-->
<!--        <button class="btn btn-default">The nightlife is wild.</button>-->
    </div>
    <div class="form-group">
        <p>Wow, <span data-insert="city"></span> sounds like a really hip place to visit!</p>
        <p>In order to bring you some great travel tips, we’d like to know a little bit about your travel preferences.</p>
        <p>Do you travel with others or do you like to fly solo?</p>
        <button class="btn btn-default next">Wandering Soul</button>
        <button class="btn btn-default next">More is Better</button>
    </div>
    <div class="form-group">
        <p>Who do you travel with?</p>
        <button class="btn btn-default next">spouse/significant other</button>
        <button class="btn btn-default next">friends</button>
        <button class="btn btn-default next">children</button>
    </div>
    <div class="form-group">
        <p>What kind of travel experience do you and your [friends, children, spouse] enjoy?</p>
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
        <p>And we’re done! Now for the fun stuff. What would you like to do, <span data-insert="name"></span>?</p>
        <a href="/trips/add" class="btn btn-primary">Get recommendations for your trip</a> |
        <a href="/account/users/index" class="btn btn-success">Help someone else plan a trip</a>
    </div>
    <div class="form-group">
        <a class="btn btn-success" href="/account/users/index">Register</a>
    </div>
</form>
<a class="btn btn-default back">Back</a>
<a class="btn btn-default next">Next</a>