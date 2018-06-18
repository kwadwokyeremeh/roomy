<div class="vk-checkout-order-paypal">
    <div class="row">
        <div id="order_review" class="woocommerce-checkout-review-order">


            <div class="col-md-12">
                <div id="payment" class="woocommerce-checkout-payment">

                    <div class="form-row place-order">


                        <div class="col-xs-4">
                            @if ($wizard->hasPrev())
                                <a href="{{ route('hostel.registration', ['step' => $wizard->prevSlug()]) }}">
                                    <input type="submit" class="button alt multi-prevent-submit" id="previous" value="Previous" data-value="Previous">
                                </a>
                            @else
                                <a href="#" style="display: none">Previous</a>
                            @endif
                        </div>
                        <div class="col-xs-4">
                            <div class="vk-dark-our-room-item-book">
                                <div class="vk-dark-our-room-item-book-left">
                                    <ul>
                                        <li>
                                            <p>Rating : </p>
                                        </li>
                                        <li>
                                            <p>{{ $step->number }}/ <span>{{ $wizard->limit() }}</span></p>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="col-xs-4">

                            @if ($wizard->hasNext())
                                <input type="submit" class="button alt multi-prevent-submit" id="next" value="Next" data-value="Next">
                            @else
                                <input type="submit" class="button alt multi-prevent-submit" id="next" value="Done" data-value="Done">
                            @endif

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>



