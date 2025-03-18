
<style>

    /* FAQ Heading Styles */
    .faq-heading {
        position: relative;
        padding-top: 20px;
    }

    .faq-heading .sub-t {
        color: #E100FF;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-bottom: 10px;
        font-size: 14px;
    }

    .faq-heading h2 {
        font-size: 36px;
        font-weight: 700;
        color: white;
        margin-bottom: 15px;
    }

    .heading-line {
        height: 3px;
        width: 80px;
        background: linear-gradient(to right, #7F00FF 0%, #E100FF 50%, #7F00FF 100%);
        margin-top: 10px;
    }
    /* Accordion body styling */
    .tf-faq .accordion-body {
        padding: 20px !important;
        color: #ffffff !important; /* Pure white text */
        background-color: #141B22 !important;
        border-top: 1px solid rgba(255, 255, 255, 0.2) !important; /* Thin white separator line */
    }

    /* Direct targeting of text inside accordion body */
    .tf-faq .accordion-body p,
    .tf-faq .accordion-body div,
    .tf-faq .accordion-body span,
    .tf-faq .accordion-body li {
        color: #ffffff !important; /* Ensure all text elements are pure white */
    }
    /* First, reset Bootstrap's default accordion button styles */
    .accordion-button {
        background-color: #141B22 !important;
        color: white !important;
        font-size: 22px !important;
        padding: 15px !important;
        position: relative !important;
        box-shadow: none !important;
        border: none !important;
    }

    /* Remove Bootstrap's default arrow completely */
    .accordion-button::after {
        display: none !important;
    }

    /* Create a new custom plus icon using ::before pseudo-element */
    .accordion-button::before {
        content: "+" !important;
        position: absolute !important;
        right: 20px !important;
        font-size: 40px !important;
        font-weight: bold !important;
        color: transparent !important;
        background: linear-gradient(to right, #7F00FF 0%, #E100FF 50%, #7F00FF 100%) !important;
        -webkit-background-clip: text !important;
        background-clip: text !important;
        line-height: 1 !important;
        top: 50% !important;
        transform: translateY(-50%) !important;
    }

    /* Change to minus sign when open */
    .accordion-button:not(.collapsed)::before {
        content: "−" !important;
    }

    /* Style the accordion items */
    .accordion-item {
        background-color: #141B22 !important;
        color: white !important;
        padding: 15px !important;
        margin-bottom: 15px !important;
        border: none !important;
    }

    /* Style the accordion body */
    .accordion-body {
        color: white !important;
        padding: 15px 0 0 0 !important;
    }

    /* Ensure no Bootstrap styles interfere */
    .accordion-collapse {
        background-color: #141B22 !important;
    }



    /* Completely new CSS for accordion that will override Bootstrap */
    .tf-faq .accordion-button {
        background-color: #141B22 !important;
        color: white !important;
        font-size: 22px !important;
        padding: 15px !important;
        position: relative !important;
        width: 100% !important;
        text-align: left !important;
        border: none !important;
        border-radius: 0 !important;
    }

    /* Remove Bootstrap's default arrow */
    .tf-faq .accordion-button::after {
        content: none !important;
        display: none !important;
    }

    /* Add a custom plus sign */
    .tf-faq .accordion-button::before {
        content: '+' !important;
        position: absolute !important;
        right: 15px !important;
        top: 50% !important;
        transform: translateY(-50%) !important;
        font-size: 30px !important;
        font-weight: bold !important;
        color: #E100FF !important;
    }

    /* Change to minus when open */
    .tf-faq .accordion-button:not(.collapsed)::before {
        content: '−' !important;
    }

    /* Accordion item styling */
    .tf-faq .accordion-item {
        background-color: #141B22 !important;
        border: none !important;
        margin-bottom: 15px !important;
        border-radius: 0 !important;
    }

    /* Accordion body styling */
    .tf-faq .accordion-body {
        padding: 20px !important;
        color: white !important;
        background-color: #141B22 !important;
    }

    /* Remove any Bootstrap focus outline */
    .tf-faq .accordion-button:focus {
        box-shadow: none !important;
        outline: none !important;
    }

    /* Ensure the collapse area is also dark */
    .tf-faq .accordion-collapse {
        background-color: #141B22 !important;
    }
</style>
<!-- FAQ Heading -->
<div class="faq-heading text-center">
    <div class="sub-t">Got Questions?</div>
    <h2>Frequently Asked Questions</h2>
    <div class="heading-line mx-auto"></div>
</div>
<br><br>
<section class="tf-faq">
    <div class="container">


        <div class="row py-3">
            @if(isset($faqs) && count($faqs) > 0)
                <!-- Dynamic FAQ Generation From Backend -->
                @php
                    // Split FAQs into two columns
                    $totalFaqs = count($faqs);
                    $halfCount = ceil($totalFaqs / 2);
                    $leftColumnFaqs = $faqs->take($halfCount);
                    $rightColumnFaqs = $faqs->skip($halfCount);
                @endphp

                    <!-- Left Column -->
                <div class="col-lg-6 col-md-12">
                    <div class="accordion" id="faqAccordionLeft">
                        @foreach($leftColumnFaqs as $index => $faq)
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqLeft{{ $faq->id }}" aria-expanded="{{ $index === 0 ? 'true' : 'false' }}" aria-controls="faqLeft{{ $faq->id }}">
                                        {{ $faq->question }}
                                    </button>
                                </h2>
                                <div id="faqLeft{{ $faq->id }}" class="accordion-collapse collapse" data-bs-parent="#faqAccordionLeft">
                                    <div class="accordion-body">
                                        {{ $faq->answer }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Right Column -->
                <div class="col-lg-6 col-md-12">
                    <div class="accordion" id="faqAccordionRight">
                        @foreach($rightColumnFaqs as $index => $faq)
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqRight{{ $faq->id }}" aria-expanded="false" aria-controls="faqRight{{ $faq->id }}">
                                        {{ $faq->question }}
                                    </button>
                                </h2>
                                <div id="faqRight{{ $faq->id }}" class="accordion-collapse collapse" data-bs-parent="#faqAccordionRight">
                                    <div class="accordion-body">
                                        {{ $faq->answer }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @else
                <!-- Fallback if no FAQs are available -->
                <div class="col-12 text-center">
                   <p>No Faqs Found</p>
                </div>
            @endif
        </div>
    </div>
</section>
