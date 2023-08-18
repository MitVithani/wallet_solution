@extends('mainlayout')

@section('content')
        <style>
            .collapsible {
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none !important;
            text-align: left;
            outline: none;
            font-size: 18px;
            font-weight: 700;
            background-color: #ffffff;
            }

            .active,.collapsible{
                outline: none;
            }

            .collapsible:after {
            content: '+';
            font-weight: bold;
            float: right;
            margin-left: 5px;
            outline: none;
            }

            .active:after {
            content: "-";
            outline: none;
            }

            .content {
            padding: 0 18px;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.2s ease-out;
            }
            </style>
            </head>
            <body>


    <div class="container mb-4">

            <h2 class="text-center">Terms & Conditions</h2>

            <h4 class="my-2"> Legal Agreement</h4>

            <div class="header_text">Legal Agreement
                The Terms and Conditions described here constitute a legal agreement ("Agreement") among the sole proprietor or business listed as the "Merchant" in the 4pay registration page, (the "Merchant" on the registration page, sometimes referred to as "you, "your", "user"), 4pay ("4pay"), Payment processor ("processor"), and Business Bank, collectively with 4pau and the payment processing partner referred to as "we", ("our" or "us").
                </div>
            <h4 class="my-3"> A.The 4pay Service (the "Service")</h4>

            <div class="collapsible">1. The Processor: </div>
                <div class="content">
                    <p>The Payment Processor is a technical service provider and may offer the services as an agent of one or more financial institutions in the operating countries (each, a “Financial Services Provider”). The processing and settlement of your Transactions (as defined below) (“Payment Processing”) are carried out by the Processor. By accepting this Agreement, you are also accepting and agreeing to be bound by the Processor Terms which are a legal agreement between you and the Processor."</p>
                    <p>We reserve the right to change the Processor, subject to the terms of our agreement with Processor. In the event of any inconsistency between this Agreement and the Processor Terms, this Agreement shall prevail, except in the event of any inconsistency between this Agreement and the Processor Terms concerning Payment Processing or the Processor Account, in which case the Processor Terms shall prevail.</p>
                    <p>The Processor’s role is to accept and process credit card, debit card and other types of payments (collectively “Cards”) with respect to sales of your products and services through internet-based transactions (“Card Not Present Transactions" or “CNP Transactions”). If applicable, POS Equipment permits transmission of data to the Processor from in-person, point-of-sale transactions (“Card Present Transactions" or “CP Transactions”) as well as manually entered transactions (“Keyed Transactions”). CNP Transactions, CPTransactions and Keyed Transactions shall be referred to herein, collectively, as “Transactions”.</p>
            </div>
            <div class="collapsible">2. Our Software :</div>
                <div class="content">
                    <p>4pay provide the payment software to enable you to use the Service. We reserve the right to require you to install or update any and all software updates to continue using the Service. The foregoing offering is separate and distinct from the 4pay e-commerce and other services that are provided by 4pay under separate terms and conditions, which are independent of this Agreement (such services being a "4pay Account" and such agreement being the "4pay Merchant Agreement").</p>
                </div>
            <div class="collapsible">3. Authorization for Handling of Funds:</div>
                <div class="content">
                    <p>By accepting this Agreement, you authorize 4pay to hold, receive, and disburse funds on your behalf when such funds from your card transactions settle from the Payment Networks. You further authorize 4pay to determine the manner of how your card transaction settlement funds should be disbursed to you (such as by bank transfer or sending you a paper check payable to you) and the timing of such disbursements. You also authorize 4pay to hold settlement funds in a deposit account at a local financial institution pending disbursement of the funds to you in accordance with the terms of this Agreement. You agree you are not entitled to any interest or other compensation associated with the settlement funds held in the deposit account at Local financial institution pending settlement to your designated bank settlement account, that you have no right to direct that deposit account, and that you may not assign any interest or grant any security interest or lien in the settlement funds or the deposit account at Local financial institution. From time to time, we may make available to you information in the 4pay account regarding anticipated settlement amounts that we have received on your behalf from the Payment Networks and are being held by us pending settlement. The settlement information reflected in the 4pay account is for reporting and informational purposes only, and does not create any ownership or other rights in settlement funds, which are provisional credits only, until such funds are credited to your designated bank settlement account. Your authorizations set forth here in will remain in full force and effect until your 4pay account is closed or terminated.</p>
                </div>
            <div class="collapsible">4. Payment Methods:</div>
                <div class="content">
                    <p>The 4pay Payments card processing service supports most issued cards with a Payment Network logo, including credit, debit, pre-paid, or gift cards. 4pay will only process card transactions that have been authorized by the applicable Payment Network or card issuer. You are solely responsible for verifying the identity of users and of the eligibility of a presented payment card used to purchase your products and services, and 4pay does not guarantee or assume any liability for transactions authorized and completed which may later be reversed or charged back (See Chargebacks section below). You are solely responsible for all reversed or charged back transactions, regardless of the reason for, or timing of, the reversal or chargeback. 4pay may add or remove one or more types of cards as a supported payment card any time without prior notice to you.</p>
                </div>
            <div class="collapsible">5. Customer Service Processor:</div>
                <div class="content">
                    <p>4pay will provide you with customer service to resolve any issues relating to your 4pay account, your card payment processing and use of our software, and the distribution of funds to your designated bank settlement account. You and you solely, are responsible for providing service to your customers for any and all issues related to your products and services, including but not limited to issues arising from the processing of customers' cards through the Service.</p>
                </div>
            <div class="collapsible">6. Taxes and Reporting:</div>
                <div class="content">
                    <p>It is your responsibility to determine what, if any, taxes apply to the sale of your goods and services and/or the payments you receive in connection with your use of the Service ("Taxes"). It is solely your responsibility to assess, collect, report, or remit the correct tax to the proper tax authority. We are not obligated to, nor will we determine whether Taxes apply, or calculate, collect, report, or remit any Taxes to any tax authority arising from any transaction. You acknowledge that we may make certain reports to tax authorities regarding transactions that we process and merchants to which we provide card payment services.</p>
                </div>
            <div class="collapsible">7. Security: </div>
                <div class="content">
                    <p>4pay and Processor maintain commercially reasonable administrative, technical and physical procedures to protect all the personal information regarding you and your customers that is stored in our servers from unauthorized access and accidental loss or modification. However, we cannot guarantee that unauthorized third parties will never be able to defeat those measures or use such personal information for improper purposes. You acknowledge that you provide this personal information regarding you and your customers at your own risk.</p>
                </div>
            <div class="collapsible">8. Audit Right:</div>
                <div class="content">
                    <p> If we believe that a security breach or compromise of data has occurred, 4pay may require you to have a third party auditor that is approved by 4pay conduct a security audit of your systems and facilities and issue a report to be provided to 4pay, financial banks, and the Payment Networks.</p>
                </div>
            <div class="collapsible">9. Privacy: </div>
                <div class="content">
                    <p>Your privacy and the protection of your data are very important to us. 4pay works with the Processor to provide the 4pay service, and both 4pay and Processor may collect or receive certain personal data about you and your customers.</p>
                </div>
            <div class="collapsible">10. Privacy of Others: </div>
                <div class="content">
                    <p>You represent to us that you are in compliance with all applicable privacy laws, you have obtained all necessary rights and consents under applicable law to disclose to us, or allow 4pay or Processor to collect, use, retain and disclose any Cardholder Data that you provide to us or authorize us to collect, including information that we may collect directly from your end users via cookies or other means, and that we will not be in breach of any such laws by collecting, receiving, using and disclosing such information in connection with the Service. As between the parties to this Agreement, you are solely responsible for disclosing to your customers that we are processing credit card transactions for you and obtaining Data from such customers. If you receive information about others, including Cardholders, through the use of the Service, you must keep such information confidential and only use it in connection with the Service. You may not disclose or distribute any such information to a third party or use any such information for marketing purposes unless you receive the express consent of the user to do so. You may not disclose card numbers to any third party, other than in connection with processing a card transaction requested by the buyer customer.</p>
                </div>
            <div class="collapsible">11. Restricted Use: </div>
                <div class="content">
                   <p>You are required to obey all laws, rules, and regulations applicable to your use of the Service (for example, those governing financial services, consumer protections, unfair competition, anti-discrimination or false advertising). In addition to any other requirements or restrictions set forth in this Agreement, you shall not: (i) utilize the credit available on any Card to provide cash advances to Cardholders, (ii) submit any card transaction for processing that does not arise from your sale of goods or service to a buyer customer,
                    (iii) act as a payment intermediary or aggregator or otherwise resell our services on behalf of any third party, (iv) send what you believe to be potentially fraudulent authorizations or fraudulent card transaction, or (v) use your 4pay account or the Service in a manner that Visa, MasterCard, or any other Payment Network reasonably believes to be an abuse of the Payment Network or a violation of Payment Network rules.
                    You further agree not to, nor to permit any third party to, do any of the following:
                    (i) access or attempt to access our systems, programs or data that are not made available for public use: (ii) copy, reproduce, republish, upload, post, transmit, resell or distribute in any way material from us; (iii) permit any third party to use and benefit from the Service via a rental, lease, timesharing, service bureau or other arrangement; (iv) transfer any rights granted to you under this Agreement;
                    (v) work around any of the technical limitations of the Service, use any tool to enable features or functionalities that are otherwise disabled in the Service, or decompile, disassemble or other wise reverse engineer the Service, except to the extent that such restriction is expressly prohibited by law; (vi) perform or attempt to perform any actions that would interfere with the proper working of the Service, prevent access to or use of the Service by our other users, or impose an unreasonable or disproportionately large load on our infrastructure; or (vii) otherwise use the Service except as expressly allowed under this section.
                    </p>
                </div>
            <div class="collapsible">12. Suspicion of Unauthorized or Illegal Use:</div>
                <div class="content">
                    <p>We reserve the right to not authorize or settle any transaction you submit which we believe is in violation of this Agreement, any other 4pay or Processor agreement, or exposes you, other 4pay Payments users, our processors or 4pay or Processor to harm, including but not limited to fraud and other criminal acts. You are hereby granting us authorization to share information with law enforcement about you, your transactions, or your 4pay account if we reasonably suspect that your 4pay account has been used for an unauthorized, illegal, or criminal purpose.</p>
                </div>
            <div class="collapsible">13. Payment Network Rules: </div>
                <div class="content">
                    <p>The Payment Networks have established guidelines, bylaws, rules, and regulations ("Payment Network Rules"). You are required to comply with all Payment Network Rules that are applicable to merchants. You can review portions of the Payment Network rules at Visa and MasterCard. The Payment Networks reserve the right to amend the Payment Network Rules. The Processor, acting on behalf of 4pay, reserves the right to amend the Agreement at any time with notice to you as necessary to comply with Network Rules or otherwise address changes in the Service.</p>
                </div>
            <div class="collapsible">14. Disclosures and Notices: </div>
                <div class="content">
                    <p>You agree that 4pay can provide disclosures and notices, including tax forms, regarding the Service to you by posting such disclosures and notices on our website, emailing them to the email address listed in your 4pay account, or mailing them to the address listed in your 4pay account. You also agree that electronic disclosures and notices have the same meaning and effect as if we had provided you with a paper copy. Such disclosures and notices shall be considered to be received by you within 24 hours of the time it is posted to our website or emailed to you unless we receive notice that the email was not delivered.</p>
                </div>

        <h4 class="my-2"> B. Getting a 4pay account</h4>

            <div class="collapsible">1. Registration :</div>
                <div class="content">
                    <p>The Service is only made available to persons in the 4pay covered territories that operate a business selling goods and services, and the Service is not made available to persons to accept card payments for personal, family or household purposes. To use 4pay Payments for your business, you will first have to register for a 4pay account ("4pay account"). When you register for a 4pay Account, we will collect basic information including your name, company name, location, email address, and phone number. You may choose to register as an individual (sole proprietor) or as a company or other business organization. If you register as a company or business, you must also provide information about an owner or principal of the business and you must be authorized to act on behalf of the business and have the authority to bind the business to this Agreement. In order to sign up a business to use the Service, you must agree to this Agreement on behalf of the business. If you have so agreed, the term "you" will mean you, the natural person, as well as the business you represent.</p>
                </div>
            <div class="collapsible">2. 4pay Merchant ID :</div>
                <div class="content">
                    <p>4pay acts as the merchant of record on all card transactions. The name 4pay may appear in your customers' credit or debit card statements. To avoid customer confusion and transaction disputes, it is important that you make your customers aware of this. You agree to indemnify us from any costs from disputes due to your failure to do so.</p>
                </div>
            <div class="collapsible">3. Verification and Underwriting:</div>
                <div class="content">
                    <p> To verify your identity, we will require additional information including your government issued ID, tax identification number, commercial license and date of birth. We may also ask for additional information to help verify your identity and assess your business risk including business invoices, reseller authorization or distributor information or a driver's license. We may ask you for financial statements. We may request your permission to do a physical inspection at your place of business and to examine books and records that pertain to your compliance with this Agreement. Your failure to comply with any of these requests within five (5) days may result in suspension or termination of your 4pay account. You authorize us to retrieve additional information about you from third parties and other identification services.</p>
                    <p>After we have collected and verified all your information, 4pay will review your account and determine if you are eligible to use the Service. 4pay may also share your information with our payment processors (such as Local financial institutions), each of which may also make a determination regarding your eligibility. We will notify you once your account has been either approved or deemed ineligible for use of the Service.</p>
                    <p>By accepting the terms of this Agreement, you are providing us with authorization to retrieve information about you by using third parties, including credit bureaus and other information providers. You acknowledge that such information retrieved may include your name, address history, credit history, and other data about you. We may periodically update this information to determine whether you continue to meet the eligibility requirements for a 4pay account.</p>
                    <p>You agree that 4pay is permitted to contact and share information about you and your application (including whether you are approved or declined), and your 4pay account with the payment processor, including Local financial institutions. This includes sharing information (a) about your transactions for regulatory or compliance purposes, (b) for use in connection with the management and maintenance of the Service, (c) to create and update their customer records about you and to assist them in better serving you, and (d) to conduct 4pay's risk management process.</p>
                </div>
            <div class="collapsible">4. Prohibited Businesses:</div>
                <div class="content">
                    <p>The following categories of businesses and business practices are prohibited from using the 4pay Service (“Prohibited Businesses”). Prohibited Business categories may be imposed through Payment Network Rules or the requirements of the Processor’s Financial Services Providers. The types of businesses listed below are representative, but not exhaustive. If you are uncertain as to whether your business is a Prohibited Business, or have questions about how these requirements apply to you, please contact us. We may add to or update the Prohibited Business list at any time.</p>
                </div>

        <!--Financial and professional services-->
            <h4 class="my-4"> Financial and professional services:</h4>
                <h6 class="mt-4">Investment & credit services</h6>
                <div class="">
                    Securities brokers; mortgage consulting or debt reduction services; credit counseling or repair; real estate opportunities; lending instruments
                </div>
                <h6 class="mt-4">Money and legal services </h6>
                <div class="">
                    Money transmitters, check cashing, wire transfers, money orders; currency exchanges or dealers; bail bonds; collections agencies; law firms collecting funds for any purpose other than to pay fees owed to the firm for services provided by the firm (e.g., firms cannot use 4pay Payments to hold client funds, collection or settlement amounts, disputed funds, etc.)
                </div>
                <h6 class="mt-4">Virtual currency or stored value </h6>
                <div class="">
                    Virtual currency that can be monetized, resold, or converted to physical or digital products and services or otherwise exit the virtual world (e.g., Bitcoin); sale of stored value, quasi-cash or credits maintained, accepted and issued by anyone other than the seller
                </div>

            <h4 class="my-4">IP Infringement, regulated or illegal products and services</h4>
                <h6 class="mt-4">Intellectual property or proprietary rights infringement Sales</h6>
                <div class="">
                    to counterfeit music, movies, software, or other licensed materials without the appropriate authorization from the rights holder; any product or service that infringes or facilitates infringement upon the trademark, patent, copyright, trade secrets, or proprietary or privacy rights of any third party; use of 4pay intellectual property without express consent from 4pay; use of the 4pay name or logo including use of 4pay trade or service marks inconsistent with the 4pay Trademark Usage Guidelines, or in a manner that otherwise harms 4pay or the 4pay brand; any action that implies an untrue endorsement by or affiliation with 4pay
                </div>
                <h6 class="mt-4">Counterfeit or unauthorized goods</h6>
                <div class="">
                    Unauthorized sale or resale of brand name or designer products or services; sale of goods or services that are illegally imported or exported
                </div>
                <h6 class="mt-4">Gambling</h6>
                <div class="">
                    Lotteries; bidding fee auctions; sports forecasting or odds making; fantasy sports leagues with cash prizes; internet gaming; contests; sweepstakes; games of chance
                </div>
                <h6 class="mt-4">Adult content and services</h6>
                <div class="">
                    Pornography and other obscene materials (including literature, imagery and other media). Sites offering any sexually-related products or services such as prostitution, massage parlours, dating-services, companion/escort services; international match-making and mail-order brides; pay-per view, adult live chat or call features; child pornography, fetish gear and services including S&M paraphernalia; hard-core sexually oriented products and services; sex shows, sex clubs, topless bars, strip shows, and other adult entertainment; widgets that allow you to access pornography or pornographic ads
                </div>

            <h4 class="my-2">Unfair, predatory, or deceptive practices</h4>

                <h6 class="mt-4">Get rich quick schemes </h6>
                <div class="">
                    Investment opportunities or other services that promise high rewards
                </div>
                <h6 class="mt-4">Mug shot publication or pay-to-remove sites</h6>
                <div class="">
                    Platforms that facilitate the publication and removal of content (such as mug shots), where the primary purpose of posting such content is to cause or raise concerns of reputational harm
                </div>
                <h6 class="mt-4">No-value-added services</h6>
                <div class="">
                    Sale or resale of a service without added benefit to the buyer; resale of government offerings without authorization or added value; sites that we determine in our sole discretion to be unfair, deceptive, or predatory towards consumers
                </div>

            <h4 class="my-4">Products or services that are other wise prohibited by our financial partners</h4>
                <h6 class="mt-4">Aggregation </h6>
                <div class="">
                    Engaging in any form of licensed or unlicensed aggregation of funds owed to third parties, factoring, or other activities intended to obfuscate the origin of funds
                </div>
                <h6 class="mt-4">Drug paraphernalia </h6>
                <div class="">
                    Any equipment designed for making or using drugs, such as bongs, vaporizers, and hookahs
                </div>
                <h6 class="mt-4">Event Tickets </h6>
                <div class="">
                    Event or festival tickets, event ticket resellers, including theme park ticket reseller
                </div>
                <h6 class="mt-4">Government Services </h6>
                <div class="">
                    Embassies, foreign consulates or other foreign governments
                </div>
                <h6 class="mt-4">High risk businesses </h6>
                <div class="">
                    Human hair, fake hair, or hair-extensions; age verification services; bankruptcy lawyers; computer technical support; psychic services; extended warranties; travel reservation services and clubs; airlines; cruises; timeshares; chain-letters; essay mills; flea markets; prepaid phone cards, phone services, and cell phones; telemarketing, telecommunications equipment and telephone sales; shipping or forwarding brokers; door-to-door sales; negative response marketing; credit card and identity theft protection; the use of credit to pay for lending services; any businesses that we believe poses elevated financial risk, legal liability, or violates card network or bank policies
                </div>
                <h6 class="mt-4">Multi-level marketing</h6>
                <div class="">
                    Pyramid schemes, network marketing, and referral marketing programs
                </div>

    </div>

    <script>
        var coll = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.maxHeight){
            content.style.maxHeight = null;
            } else {
            content.style.maxHeight = content.scrollHeight + "px";
            }
        });
        }
    </script>
@endsection
