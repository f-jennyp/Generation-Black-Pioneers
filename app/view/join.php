<div id="content">
    <div id="join">
        <div class="row">
            <div class="foreword">JOIN AND GIVE</div>
            <h1> Give to
                <?php $this->info("company_name"); ?> on <span class="text-bold-red">Zelle</span>
            </h1>
            <div class="join-con">
                <div class="flex">
                    <form action="signUpForm" method="post" class="ctc-form">
                        <div class="form-holder">
                            <label><span class="ctc-hide">Name</span>
                                <input type="text" name="name" placeholder="Name">
                            </label>
                            <label><span class="ctc-hide">address</span>
                                <input type="text" name="address" placeholder="Address">
                            </label>
                            <label><span class="ctc-hide">Phone</span>
                                <input type="text" name="phone" placeholder="Phone">
                            </label>
                        </div>
                        <button type="submit" class="ctcBtn btn hvr-grow hvr-sweep-to-top" disabled>SIGN UP</button>

                    </form>

                    <div class="yt-vid">
                        <iframe width="560" height="315"
                            src="https://www.youtube.com/embed/-jWv6hup7R8?si=gSVmiMj4WgdVxTlP"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="btn-holder">
                    <div class="btn learn">
                        <a href="<?php echo URL ?>events#content">LEARN</a>
                    </div>
                    <div class="btn engage">
                        <a href="<?php echo URL ?>events#content">ENGAGE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>