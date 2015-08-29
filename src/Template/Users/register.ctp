<?php $this->set('body_class', 'register'); ?>
<div class="forms-container">
    <div class="forms-content">
        <form id="registration">
            <div class="form-group current">
                <h1>Hi there, welcome to Trek. What’s your name?</h1>
                <input type="text" name="name" required="required" class="form-control tabbable" autocomplete="autocomplete" />
            </div>
            <div class="form-group">
                <div class="frame">
                    <h1>Hi, <span data-insert="name">Name</span>, it’s really great to meet you. Let’s get to know each other a little.</h1>
                </div>
                <div class="frame form-inline">
                    <h1>We live in Greenville, SC, USA. Where do you live?</h1>
                    <input type="text" name="city" placeholder="City" class="form-control" />
                    <input type="text" name="state" placeholder="State/Region" class="form-control" />
                    <input type="text" name="country" placeholder="Country" class="form-control tabbable" />
                </div>

            </div>
            <div class="form-group">
                <h1>Why would someone want to visit <span data-insert="city">City</span>?</h1>
                <div class="checkbox-wrap">
                    <input type="checkbox" name="why" value="food" />
                    <label>It’s foodie heaven</label>
                </div>
                <div class="checkbox-wrap">
                    <input type="checkbox" name="why" value="music" />
                    <label>A vibrant music scene</label>
                </div>
                <div class="checkbox-wrap">
                    <input type="checkbox" name="why" value="art" />
                    <label>The art community is thriving</label>
                </div>
                <div class="checkbox-wrap">
                    <input type="checkbox" name="why" value="shopping" />
                    <label>The shopping is first-rate</label>
                </div>
                <div class="checkbox-wrap">
                    <input type="checkbox" name="why" value="amusements" />
                    <label>Thrilling amusements</label>
                </div>
                <div class="checkbox-wrap">
                    <input type="checkbox" name="why" value="history" />
                    <label>For the history</label>
                </div>
                <div class="checkbox-wrap">
                    <input type="checkbox" name="why" value="landscape" />
                    <label>To landscape is beautiful</label>
                </div>
                <div class="checkbox-wrap">
                    <input type="checkbox" name="why" value="nightlife" />
                    <label>The nightlife is wild</label>
                </div>
            </div>
            <div class="form-group">
                <h1>Wow, <span data-insert="city"></span> sounds like a really hip place to visit!</h1>
                <h1>In order to bring you some great travel tips, we’d like to know a little bit about your travel preferences.</h1>
                <h1>Do you travel with others or do you like to fly solo?</h1>
                <button class="btn btn-default next main-button hide_nav">Wandering Soul</button>
                <button class="btn btn-default next main-button hide_nav">More is Better</button>
            </div>
            <div class="form-group">
                <h1>Who do you travel with?</h1>
                <div class="checkbox-wrap">
                    <input type="checkbox" name="companions" value="spouse/significant other" />
                    <label>Spouse/Significant Other</label>
                </div>
                <div class="checkbox-wrap">
                    <input type="checkbox" name="companions" value="friends" />
                    <label>Friends</label>
                </div>
                <div class="checkbox-wrap">
                    <input type="checkbox" name="companions" value="children" />
                    <label>Offspring</label>
                </div>
            </div>
            <div class="form-group">
                <h1>What kind of travel experience do you and your [friends, children, spouse] enjoy?</h1>
                <div class="checkbox-wrap">
                    <input type="checkbox" name="travel_type" value="adventure" />
                    <label>Adventure</label>
                </div>
                <div class="checkbox-wrap">
                    <input type="checkbox" name="travel_type" value="relaxing" />
                    <label>Relaxing</label>
                </div>
                <div class="checkbox-wrap">
                    <input type="checkbox" name="travel_type" value="adventure" />
                    <label>Off the Beaten Path</label>
                </div>
                <div class="checkbox-wrap">
                    <input type="checkbox" name="travel_type" value="special_events" />
                    <label>Special Events</label>
                </div>
                <div class="checkbox-wrap">
                    <input type="checkbox" name="travel_type" value="outdoors" />
                    <label>Outdoors</label>
                </div>
                <div class="checkbox-wrap">
                    <input type="checkbox" name="travel_type" value="family" />
                    <label>Family-Friendly</label>
                </div>
            </div>
            <div class="form-group">
                <h1>Push the button and expierience Trek. Oh and we'll save your data too.</h1>
                <a data-url="/users/register" class="next complete btn btn-primary main-button">Start Trekking!</a>
            </div>
            <div class="form-group">
                <h1>And we’re done! Now for the fun stuff. What would you like to do, <span data-insert="name"></span>?</h1>
                <a href="/trips/add" class="btn btn-primary main-button hide_nav">Get Travel Advice</a>
                <a href="/account/users/index" class="btn btn-success main-button hide_nav">Give Travel Advice</a>
            </div>
            <div class="form-group">
                <a class="btn btn-success" href="/account/users/index">Register</a>
            </div>
        </form>
        <a class="btn btn-default back main-button">Back</a>
        <a class="btn btn-default next main-button">Next</a>
    </div>
</div>
