</div></div>

<div id="footer">
    <div class="container hidden-xs">
        <div class="row">
            <div class="col-xs-8">
                <p class="text-muted credit">
                    &copy; {{ Config::get('cms.author') }} {{ date("Y") }}. All rights reserved. Powered by <a href="https://github.com/BootstrapCMS/CMS">BootstrapCMS</a>
                </p>
            </div>
            <div class="col-xs-4">
                <p class="text-muted credit pull-right">
                    Generated in {{ round((microtime(1) - LARAVEL_START), 4) }} sec.
                </p>
            </div>
        </div>
    </div>
    <div class="container visible-xs">
        <p class="text-muted credit">
            &copy; {{ Config::get('cms.author') }} {{ date("Y") }}. All rights reserved. Powered by <a href="https://github.com/BootstrapCMS/CMS">BootstrapCMS</a>
        </p>
    </div>
</div>

{!! HTML::script('//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.2/jquery.min.js') !!}
{!! HTML::script('//cdnjs.cloudflare.com/ajax/libs/jquery-timeago/1.4.1/jquery.timeago.min.js') !!}
{!! HTML::script('//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.2/js/bootstrap.min.js') !!}
{!! Asset::scripts('main') !!}
@section('js')
@show
@if (Config::get('analytics.google'))
    @include('partials.analytics')
@endif
