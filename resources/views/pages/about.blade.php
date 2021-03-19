@extends("common.layouts.layout")


@section("title") CodeFreakz | About @endsection

@section("content")
<div class="row my-5 mx-0">
    <div class="row col-sm-10 offset-sm-1 mx-0 mx-sm-auto">
        <div class="col-12 col-md-8 mb-5 mb-md-0">
            <h2 class="text-uppercase text-center mb-4">About me</h2>
            <div id="aboutText">
                <div class="row">
                    <div id="profilePicWrapper" class="col-6 offset-3 col-sm-5 offset-sm-0 mx-sm-auto col-md-6 offset-md-3 col-lg-3 offset-lg-0 mb-4">
                        <img src="{{ asset("assets/images/developer-profile.jpg") }}" alt="Profile picture" class="w-100">
                    </div>
                    <div class="col-lg-9">
                        <p class="mb-4">My name is Andrej Zarkovski. I'm studying web programming at "Visoka ICT
                            Škola" in Belgrade. In my early childhood I was very interested in how computers work
                            and I continued to learn more about them. Now I am pursuing career in computer
                            programming. I love computer related stuff and I love playing video games.</p>
                        <span class="d-block">Portfolio: <a href="http://zarke998.github.io/web-portfolio" target="_blank" class="mb-3 ml-2 cf-link">zarke998.github.io/web-portfolio</a></span>
                        <span class="d-block">GitHub: <a href="https://github.com/zarke998" class="mb-3 ml-2 cf-link" target="_blank">github.com/zarke998</a></span>
                        <span class="d-block">LinkedIn: <a href="https://www.linkedin.com/in/andrej-zarkovski-01b8a4188/" class="mb-3 ml-2 cf-link" target="_blank">linkedin.com/in/andrej-zarkovski-01b8a4188</a></span>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="row">
                <div id="socials" class="col-12">
                    <h4 class="text-uppercase text-center">Follow us on socials</h4>
                    <ul id="socialLinks" class="d-flex justify-content-center px-0">
                        <li><a href="http://facebook.com" target="_blank"><i class="lni lni-facebook-oval facebook-icon social-icon"></i></a>
                        </li>
                        <li><a href="http://twitter.com" target="_blank"><i class="lni lni-twitter-filled twitter-icon social-icon"></i></a>
                        </li>
                        <li><a href="http://instagram.com" target="_blank"><i class="lni lni-instagram-filled instagram-icon social-icon"></i></a></li>
                        <li><a href="http://youtube.com" target="_blank"><i class="lni lni-youtube youtube-icon social-icon"></i></a></li>
                        <li><a href="http://twitch.tv" target="_blank"><i class="lni lni-twitch twitch-icon social-icon"></i></a></li>
                    </ul>
                </div>
                <div id="twitchChannelWrapper" class="col-12 offset-0 col-md-12 offset-md-0 mt-3">
                    <h4 class="text-uppercase text-center">Our Twitter feed</h4>
                    <div id="twitchChannel" class="frameLink">
                        <a class="twitter-timeline" data-height="300" data-theme="light" href="https://twitter.com/Twitter?ref_src=twsrc%5Etfw">Tweets by Twitter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
@endsection
