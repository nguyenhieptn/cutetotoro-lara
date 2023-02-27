@extends('cutetotoro::base')
@section('content')
    <div class="container page-wrapper">
        <div class="col-inner">
            <p>How much does shipping cost?
                <br> Shipping costs vary depending on the shipping destination and the number of items that you purchase.
            </p>
            <p>Here’s how we break down our shipping prices:</p>
            <p>The Standard Shipping (8 – 12 business days) fee is $5.99.
                <br> *Please note that order handling and produced time is about 2 – 5 business days.
            </p>
            <p>Can the order be delivered to multiple addresses?
                <br> We do not offer to ship to multiple addresses for a single order. If you would like items delivered to multiple addresses, please place those orders separately.
            </p>
            <p>Do you offer delivery to PO Boxes or Military APO/FPO addresses?
                <br> Yes, we can send shipments to PO Boxes and Military APO/FPO addresses.
            </p>
            <p>Orders shipped to APO addresses are done so via DHL Globalmail and then are turned over to USPS for final delivery (through the military mail system). Shipments to APOs can take up to 45 additional days to arrive.</p>
            <p>Unfortunately, once the package enters the military mail system, tracking ceases to update for military security reasons. This means that we no longer have visibility of your order and cannot provide tracking information.</p>
            <p>Will I be charged VAT taxes?
                <br> Items shipping internationally from the US are shipped DDU (Delivered Duty Unpaid) and we do not collect VAT (Value Added Taxes). All taxes, duties, and customs fees are the responsibility of the recipient of the package.
            </p>
            <p>Depending on the receiving country, your package may incur local customs or VAT charges. We recommend contacting your local customs office for more information regarding your country’s customs policies.
            </p>
        </div>
    </div>
@stop
<style>
    .page-wrapper {
        padding-bottom: 30px;
        padding-top: 30px;
    }
    @media screen and (min-width: 850px) {
        .col:first-child .col-inner {
            margin-left: auto;
            margin-right: 0;
        }
    }
    p {
        margin-top: 0;
        margin-bottom: 1.3em;
    }
    .col-inner {
        background-position: 50% 50%;
        background-repeat: no-repeat;
        background-size: cover;
        flex: 1 0 auto;
        margin-left: auto;
        margin-right: auto;
        position: relative;
        width: 100%;
    }
</style>
