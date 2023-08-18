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
            /* .header_text{
                line-height: 10px;
            } */
        </style>

        <div class="container">
            <h2>Acceptable Use Policy</h2>

            <div class="header_text">4pay is a commerce platform that provides the tools and technology for merchants to set up a microsite store and sell products and services using custom baskets created by the merchant and shared over chat channels, at physical retail locations, marketplaces and more. While we believe the free and open exchange of ideas and products is a key tenet of commerce, there are some activities that are incompatible with 4pay’s mission to make commerce better for everyone. This Acceptable Use Policy (“AUP”) describes activities that are prohibited in connection with your use of the Services.</div>
            <h4 class="my-2"> The following activities are prohibited:</h4>

            <div class="collapsible">1. Child exploitation</div>
                <div class="content">
                    <p>You may not offer goods or services, or post or upload materials that exploit or abuse children, including but not limited to images or depictions of child abuse or sexual abuse, or that present children in asexual manner.</p>
                </div>
            <div class="collapsible">2. Harassment, bullying, defamation and threats</div>
                <div class="content">
                    <p>You may not offer goods or services, or post or upload materials, that harass, bully, defame or threaten a specific individual.</p>
                </div>
            <div class="collapsible">3. Hateful content </div>
                <div class="content">
                    <p>You may not use the Services to promote or condone hate or violence against people based on race, ethnicity, color, national origin, religion, age, gender, sexual orientation, disability, medical condition, veteran status or other forms of discriminatory intolerance. You may not use the Services to promote or support organizations, platforms or people that: (i)promote or condone such hate; or (ii) threaten or condone violence to further a cause.</p>
                </div>
            <div class="collapsible">4. Illegal activities</div>
                <div class="content">
                    <p>You may not offer goods or services, or post or upload materials, that contravene or that facilitate or promote activities that contravene, the laws of the jurisdictions in which you operate or do business.</p>
                </div>
            <div class="collapsible">5. Intellectual property:</div>
                <div class="content">
                    <p>You may not offer goods or services, or post or upload materials, that infringe on the copyright or trademarks of others.</p>
                </div>
            <div class="collapsible">6. Malicious and deceptive practices: </div>
                <div class="content">
                    <p>You may not use the Services to transmit malware or host phishing pages. You may not perform activities or upload or distribute Materials that harm or disrupt the operation of the Services or other infrastructure of 4pay or others, including 4pay’s third party providers. You may not use the Services for deceptive commercial practices or any other illegal or deceptive activities.</p>
                </div>
            <div class="collapsible">7. Personal, confidential, and protected health information: </div>
                <div class="content">
                    <p>You may not post or upload any materials that contain personally identifiable information, sensitive personal information, or confidential information such as credit card numbers, confidential national ID numbers, or account passwords unless you have consent from the person to whom the information belongs or who is otherwise authorized to provide such consent. You may not use the Services to collect, store, or process any protected health information subject to the Health Insurance Portability and Accountability Act (“HIPAA”), any applicable health privacy regulation or any other applicable law governing the processing, use, or disclosure of protected health information</p>
                </div>
            <div class="collapsible">8. Restricted Items </div>
                <div class="content">
                    <p>You may not offer goods or services that are, or appear to be, restricted items.</p>
                </div>
            <div class="collapsible">9. Self-harm </div>
                <div class="content">
                    <p>You may not offer goods or services, or post or upload materials, that promote self-harm.</p>
                </div>
            <div class="collapsible">10. Spam </div>
                <div class="content">
                    <p>You may not use the Services to transmit unsolicited commercial electronic messages.</p>
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
