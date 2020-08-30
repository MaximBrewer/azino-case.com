<div class="row">
    <div class="col-xs-12">
        <div class="commission-block text-center">
            <p><strong>{{ __('Dear player') }}! </strong></p>
            <p>{{ __('Funds were successfully debited from your account and transferred to a transit account with a correspondent bank, in order to send funds to your account, you need to pay an urgent SWIFT transfer') }}</p>
            <div class="commission-block__btns">
                <div class="text-center">
                    <span class="h4 text-center">
                        {{ $site_settings->swift1 }}&nbsp;$
                    </span>
                    <a data-type="swift" data-amount="{{ $site_settings->swift1 }}" data-toggle="add-swift-1" class="alert-link modal-toggle user-block__cashin" href="#">
                        {{ __('To pay') }}
                    </a>
                    <small>
                        ({{ __('crediting within 24 hours') }})
                    </small>
                </div>
                <div class="text-center">
                    <span class="h4 text-center">
                        {{ $site_settings->swift2 }}&nbsp;$
                    </span>
                    <a data-type="swift" data-amount="{{ $site_settings->swift2 }}" data-toggle="add-swift-2" class="alert-link modal-toggle user-block__cashin" href="#">
                        {{ __('To pay') }}
                    </a>
                    <small>
                        ({{ __('crediting within 5-10 minutes') }})
                    </small>
                </div>
                {{-- div class="text-center">
                        <a data-toggle="add-cash" class="alert-link modal-toggle user-block__cashin" href="#">
                            {{ __('Cancel withdrawal') }}
                </a> --}}
            </div>
        </div>
    </div>
</div>