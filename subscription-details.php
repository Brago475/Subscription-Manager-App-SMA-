<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <title>Subscriptions</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        /* Grid Container for Fixed 4 Columns */
        .subscriptions-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr); /* Always 4 columns */
            gap: 20px; /* Space between cards */
            justify-content: center;
            padding: 0 10px; /* Add padding around the grid */
        }

        /* Card Styling */
        .subscription-card {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .subscription-card:hover {
            transform: translateY(-5px); /* Slight hover lift */
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2); /* Enhanced shadow on hover */
        }

        .subscription-card img {
            width: 80px;
            height: auto;
            margin-bottom: 15px;
        }

        .subscription-card h3 {
            margin-bottom: 10px;
            font-size: 1.2rem;
            color: #333;
        }

        .plans {
            list-style: none;
            padding: 0;
            margin: 0;
            width: 100%; /* Full width for the list */
        }

        .plans li {
            margin: 5px 0;
            padding: 10px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .plans li span {
            font-size: 0.95rem;
        }

        .plans li .price {
            font-weight: bold;
            color: #007bff;
        }

        .plans li:hover {
            background-color: #e4e4e4;
        }

        /* Responsive Design for Small Screens */
        @media (max-width: 1024px) {
            .subscriptions-container {
                grid-template-columns: repeat(2, 1fr); /* 2 cards per row on smaller screens */
            }
        }

        @media (max-width: 768px) {
            .subscriptions-container {
                grid-template-columns: 1fr; /* 1 card per row on very small screens */
            }
        }
    </style>
</head>
<body>

    <h1 style="text-align: center; margin-bottom: 20px;">Streaming Subscriptions</h1>
    <div class="subscriptions-container">
        <!-- Netflix -->
        <div class="subscription-card">
            <img src="Logos/netflix.png" alt="Netflix Logo">
            <h3>Netflix</h3>
            <ul class="plans">
                <li>
                    <span>Basic</span>
                    <span class="price">$9.99/month</span>
                </li>
                <li>
                    <span>Standard</span>
                    <span class="price">$15.49/month</span>
                </li>
                <li>
                    <span>Premium</span>
                    <span class="price">$19.99/month</span>
                </li>
            </ul>
        </div>

        <!-- Hulu -->
        <div class="subscription-card">
            <img src="Logos/icons8-hulu-48.png" alt="Hulu Logo">
            <h3>Hulu</h3>
            <ul class="plans">
                <li>
                    <span>Ad-Supported</span>
                    <span class="price">$7.99/month</span>
                </li>
                <li>
                    <span>No Ads</span>
                    <span class="price">$14.99/month</span>
                </li>
                <li>
                    <span>Hulu + Live TV</span>
                    <span class="price">$69.99/month</span>
                </li>
            </ul>
        </div>

        <!-- Disney+ -->
        <div class="subscription-card">
            <img src="Logos/disneyplus.png" alt="Disney+ Logo">
            <h3>Disney+</h3>
            <ul class="plans">
                <li>
                    <span>Basic</span>
                    <span class="price">$7.99/month</span>
                </li>
                <li>
                    <span>Bundle (Hulu)</span>
                    <span class="price">$13.99/month</span>
                </li>
                <li>
                    <span>Premium (No Ads)</span>
                    <span class="price">$19.99/month</span>
                </li>
            </ul>
        </div>

        <!-- ESPN -->
        <div class="subscription-card">
            <img src="Logos/espn.png" alt="ESPN Logo">
            <h3>ESPN+</h3>
            <ul class="plans">
                <li>
                    <span>ESPN+ with Ads</span>
                    <span class="price">$11.99/month</span>
                </li>
                <li>
                    <span>Disney Bundle Trio Basic</span>
                    <span class="price">$16.99/month</span>
                </li>
                <li>
                    <span>Disney Bundle Trio Premium</span>
                    <span class="price">$26.99/month</span>
                </li>
                </div>
                 <!-- Starz -->
        <div class="subscription-card">
            <img src="Logos/espn.png" alt="ESPN Logo">
            <h3>Starz</h3>
            <ul class="plans">
                <li>
                    <span>BritBox </span>
                    <span class="price">$14.99/month</span>
                </li>
                <li>
                    <span>Annual Plan</span>
                    <span class="price">$74.99/year</span>
                </li>
                <li>
                    <span>Monthly Plan</span>
                    <span class="price">$14.99/month</span>
                </li>
                </div>

                <!-- FuboTV -->
                <div class="subscription-card">
    <img src="Logos/fubotv.png" alt="FuboTV Logo">
    <h3>FuboTV</h3>
    <ul class="plans">
        <li>
            <span>Pro Plan</span>
            <span class="price">$74.99/month</span>
        </li>
        <li>
            <span>Elite Plan</span>
            <span class="price">$84.99/month</span>
        </li>
        <li>
            <span>Premier Plan</span>
            <span class="price">$94.99/month</span>
        </li>
        <li>
            <span>Sports Plus Add-on</span>
            <span class="price">+$10.99/month</span>
        </li>
        <li>
            <span>Latino Plan</span>
            <span class="price">$32.99/month</span>
        </li>
    </ul>
</div>

<!-- Frndly TV -->
<div class="subscription-card">
    <img src="Logos/frndlytv.png" alt="Frndly TV Logo">
    <h3>Frndly TV</h3>
    <ul class="plans">
        <li>
            <span>Basic Plan</span>
            <span class="price">$6.99/month</span>
        </li>
        <li>
            <span>Classic Plan</span>
            <span class="price">$8.99/month</span>
        </li>
        <li>
            <span>Premium Plan</span>
            <span class="price">$10.99/month</span>
        </li>
    </ul>
</div>

<!-- Apple TV+ -->
<div class="subscription-card">
    <img src="Logos/appletvplus.png" alt="Apple TV+ Logo">
    <h3>Apple TV+</h3>
    <ul class="plans">
        <li>
            <span>Standard Plan</span>
            <span class="price">$6.99/month</span>
        </li>
    </ul>
</div>

<!-- Tubi TV -->
<div class="subscription-card">
    <img src="Logos/tubitv.png" alt="Tubi TV Logo">
    <h3>Tubi TV</h3>
    <ul class="plans">
        <li>
            <span>Free Plan</span>
            <span class="price">Free with Ads</span>
        </li>
    </ul>
</div>

<!-- Amazon Prime Movies -->
<div class="subscription-card">
    <img src="Logos/amazonprime.png" alt="Amazon Prime Logo">
    <h3>Amazon Prime Movies</h3>
    <ul class="plans">
        <li>
            <span>Prime Membership</span>
            <span class="price">$14.99/month</span>
        </li>
        <li>
            <span>Annual Prime Membership</span>
            <span class="price">$139/year</span>
        </li>
        <li>
            <span>Prime Video Only</span>
            <span class="price">$8.99/month</span>
        </li>
    </ul>
</div>

<!-- MUBI -->
<div class="subscription-card">
    <img src="Logos/mubi.png" alt="MUBI Logo">
    <h3>MUBI</h3>
    <ul class="plans">
        <li>
            <span>Standard Plan</span>
            <span class="price">$10.99/month</span>
        </li>
        <li>
            <span>Annual Plan</span>
            <span class="price">$95.88/year</span>
        </li>
    </ul>
</div>

<!-- Max (HBO Max) -->
<div class="subscription-card">
    <img src="Logos/hbomax.png" alt="Max Logo">
    <h3>Max</h3>
    <ul class="plans">
        <li>
            <span>Ad-Supported</span>
            <span class="price">$9.99/month</span>
        </li>
        <li>
            <span>Ad-Free</span>
            <span class="price">$15.99/month</span>
        </li>
        <li>
            <span>Ultimate Ad-Free</span>
            <span class="price">$19.99/month</span>
        </li>
    </ul>
</div>

<!-- Crunchyroll -->
<div class="subscription-card">
    <img src="Logos/crunchyroll.png" alt="Crunchyroll Logo">
    <h3>Crunchyroll</h3>
    <ul class="plans">
        <li>
            <span>Fan</span>
            <span class="price">$7.99/month</span>
        </li>
        <li>
            <span>Mega Fan</span>
            <span class="price">$9.99/month</span>
        </li>
        <li>
            <span>Mega Fan Annual</span>
            <span class="price">$79.99/year</span>
        </li>
    </ul>
</div>

<!-- Paramount+ -->
<div class="subscription-card">
    <img src="Logos/paramountplus.png" alt="Paramount+ Logo">
    <h3>Paramount+</h3>
    <ul class="plans">
        <li>
            <span>Essential Plan</span>
            <span class="price">$5.99/month</span>
        </li>
        <li>
            <span>Premium Plan</span>
            <span class="price">$11.99/month</span>
        </li>
        <li>
            <span>Essential + Showtime</span>
            <span class="price">$11.99/month</span>
        </li>
    </ul>
</div>

<!-- Peacock -->
<div class="subscription-card">
    <img src="Logos/peacock.png" alt="Peacock Logo">
    <h3>Peacock</h3>
    <ul class="plans">
        <li>
            <span>Free Plan</span>
            <span class="price">Free with Ads</span>
        </li>
        <li>
            <span>Premium</span>
            <span class="price">$5.99/month</span>
        </li>
        <li>
            <span>Premium Plus</span>
            <span class="price">$9.99/month</span>
        </li>
    </ul>
</div>

<!-- Discovery+ -->
<div class="subscription-card">
    <img src="Logos/discoveryplus.png" alt="Discovery+ Logo">
    <h3>Discovery+</h3>
    <ul class="plans">
        <li>
            <span>Ad-Lite</span>
            <span class="price">$4.99/month</span>
        </li>
        <li>
            <span>Ad-Free</span>
            <span class="price">$6.99/month</span>
        </li>
    </ul>
</div>

<!-- Sling TV -->
<div class="subscription-card">
    <img src="Logos/slingtv.png" alt="Sling TV Logo">
    <h3>Sling TV</h3>
    <ul class="plans">
        <li>
            <span>Sling Orange</span>
            <span class="price">$40/month</span>
        </li>
        <li>
            <span>Sling Blue</span>
            <span class="price">$40/month</span>
        </li>
        <li>
            <span>Sling Orange & Blue</span>
            <span class="price">$55/month</span>
        </li>
    </ul>
</div>

<!-- Showtime -->
<div class="subscription-card">
    <img src="Logos/showtime.png" alt="Showtime Logo">
    <h3>Showtime</h3>
    <ul class="plans">
        <li>
            <span>Standard</span>
            <span class="price">$10.99/month</span>
        </li>
        <li>
            <span>Bundle with Paramount+</span>
            <span class="price">$11.99/month</span>
        </li>
    </ul>
</div>
<!-- YouTube TV -->
<div class="subscription-card">
    <img src="Logos/youtube_tv.png" alt="YouTube TV Logo">
    <h3>YouTube TV</h3>
    <ul class="plans">
        <li>
            <span>Base Plan</span>
            <span class="price">$72.99/month</span>
        </li>
        <li>
            <span>Spanish Plan</span>
            <span class="price">$34.99/month</span>
        </li>
        <li>
            <span>Add-ons (Sports, Movies)</span>
            <span class="price">$10-$15/month</span>
        </li>
    </ul>
</div>

<!-- Roku -->
<div class="subscription-card">
    <img src="Logos/roku.png" alt="Roku Logo">
    <h3>Roku</h3>
    <ul class="plans">
        <li>
            <span>Free Plan</span>
            <span class="price">Ad-Supported</span>
        </li>
        <li>
            <span>Premium Channels</span>
            <span class="price">$4.99+/month</span>
        </li>
    </ul>
</div>

<!-- Shudder -->
<div class="subscription-card">
    <img src="Logos/shudder.png" alt="Shudder Logo">
    <h3>Shudder</h3>
    <ul class="plans">
        <li>
            <span>Monthly Plan</span>
            <span class="price">$5.99/month</span>
        </li>
        <li>
            <span>Annual Plan</span>
            <span class="price">$56.99/year</span>
        </li>
    </ul>
</div>

<!-- Kanopy -->
<div class="subscription-card">
    <img src="Logos/kanopy.png" alt="Kanopy Logo">
    <h3>Kanopy</h3>
    <ul class="plans">
        <li>
            <span>Free with Library Card</span>
            <span class="price">Free</span>
        </li>
    </ul>
</div>
    <!-- AMC+ -->
    <div class="subscription-card">
    <img src="Logos/amc_plus.png" alt="AMC+ Logo">
    <h3>AMC+</h3>
    <ul class="plans">
        <li>
            <span>Monthly Plan</span>
            <span class="price">$8.99/month</span>
        </li>
        <li>
            <span>Annual Plan</span>
            <span class="price">$83.88/year</span>
        </li>
        <li>
            <span>Premium Add-ons (Shudder, Sundance, IFC)</span>
            <span class="price">Included</span>
        </li>
    </ul>
</div>

<!-- Spotify -->
<div class="subscription-card">
    <img src="Logos/spotify.png" alt="Spotify Logo">
    <h3>Spotify</h3>
    <ul class="plans">
        <li>
            <span>Free Plan</span>
            <span class="price">Ad-Supported</span>
        </li>
        <li>
            <span>Premium Individual</span>
            <span class="price">$9.99/month</span>
        </li>
        <li>
            <span>Premium Family</span>
            <span class="price">$15.99/month</span>
        </li>
    </ul>
</div>

<!-- Apple Music -->
<div class="subscription-card">
    <img src="Logos/apple_music.png" alt="Apple Music Logo">
    <h3>Apple Music</h3>
    <ul class="plans">
        <li>
            <span>Individual</span>
            <span class="price">$10.99/month</span>
        </li>
        <li>
            <span>Family</span>
            <span class="price">$16.99/month</span>
        </li>
    </ul>
</div>
<!-- HelloFresh -->
<div class="subscription-card">
    <img src="Logos/hellofresh.png" alt="HelloFresh Logo">
    <h3>HelloFresh</h3>
    <ul class="plans">
        <li>
            <span>2 Meals for 2 People</span>
            <span class="price">$49.96/week</span>
        </li>
        <li>
            <span>4 Meals for 4 People</span>
            <span class="price">$119.84/week</span>
        </li>
    </ul>
</div>

<!-- Blue Apron -->
<div class="subscription-card">
    <img src="Logos/blue_apron.png" alt="Blue Apron Logo">
    <h3>Blue Apron</h3>
    <ul class="plans">
        <li>
            <span>2 Meals for 2 People</span>
            <span class="price">$47.95/week</span>
        </li>
        <li>
            <span>4 Meals for 4 People</span>
            <span class="price">$107.80/week</span>
        </li>
    </ul>
</div>
<!-- GEICO -->
<div class="subscription-card">
    <img src="Logos/geico.png" alt="GEICO Logo">
    <h3>GEICO Insurance</h3>
    <ul class="plans">
        <li>
            <span>Auto Insurance</span>
            <span class="price">$120/month (average)</span>
        </li>
        <li>
            <span>Homeowners Insurance</span>
            <span class="price">$85/month (average)</span>
        </li>
    </ul>
</div>

<!-- Progressive -->
<div class="subscription-card">
    <img src="Logos/progressive.png" alt="Progressive Logo">
    <h3>Progressive Insurance</h3>
    <ul class="plans">
        <li>
            <span>Auto Insurance</span>
            <span class="price">$115/month (average)</span>
        </li>
        <li>
            <span>Renters Insurance</span>
            <span class="price">$12/month</span>
        </li>
        </div>

        <!-- Tidal -->
        <div class="subscription-card">
    <img src="Logos/tidal.png" alt="Tidal Logo">
    <h3>Tidal</h3>
    <ul class="plans">
        <li>
            <span>HiFi</span>
            <span class="price">$9.99/month</span>
        </li>
        <li>
            <span>HiFi Plus</span>
            <span class="price">$19.99/month</span>
        </li>
    </ul>
</div>

        <!-- Amazon Music -->
        <div class="subscription-card">
    <img src="Logos/amazon_music.png" alt="Amazon Music Logo">
    <h3>Amazon Music</h3>
    <ul class="plans">
        <li>
            <span>Prime Members</span>
            <span class="price">Included with Prime</span>
        </li>
        <li>
            <span>Unlimited Individual</span>
            <span class="price">$9.99/month</span>
        </li>
        <li>
            <span>Unlimited Family</span>
            <span class="price">$15.99/month</span>
        </li>
    </ul>
</div>

        <!-- Apple Music -->
        <div class="subscription-card">
    <img src="Logos/apple_music.png" alt="Apple Music Logo">
    <h3>Apple Music</h3>
    <ul class="plans">
        <li>
            <span>Individual</span>
            <span class="price">$10.99/month</span>
        </li>
        <li>
            <span>Family</span>
            <span class="price">$16.99/month</span>
        </li>
        <li>
            <span>Student</span>
            <span class="price">$5.99/month</span>
        </li>
    </ul>
</div>

        <!-- Deezer -->
        <div class="subscription-card">
    <img src="Logos/deezer.png" alt="Deezer Logo">
    <h3>Deezer</h3>
    <ul class="plans">
        <li>
            <span>Premium</span>
            <span class="price">$10.99/month</span>
        </li>
        <li>
            <span>Family</span>
            <span class="price">$17.99/month</span>
        </li>
        <li>
            <span>HiFi</span>
            <span class="price">$14.99/month</span>
        </li>
    </ul>
</div>

        <!-- Youtube Music -->
        <div class="subscription-card">
    <img src="Logos/youtube_music.png" alt="YouTube Music Logo">
    <h3>YouTube Music</h3>
    <ul class="plans">
        <li>
            <span>Premium</span>
            <span class="price">$9.99/month</span>
        </li>
        <li>
            <span>Family</span>
            <span class="price">$14.99/month</span>
        </li>
    </ul>
</div>
        <!-- Qobuz -->
        <div class="subscription-card">
    <img src="Logos/qobuz.png" alt="Qobuz Logo">
    <h3>Qobuz</h3>
    <ul class="plans">
        <li>
            <span>Studio Premier</span>
            <span class="price">$12.99/month</span>
        </li>
        <li>
            <span>Studio Sublime</span>
            <span class="price">$15.99/month</span>
        </li>
    </ul>
</div>
        <!-- Pandora -->
        <div class="subscription-card">
    <img src="Logos/pandora.png" alt="Pandora Logo">
    <h3>Pandora</h3>
    <ul class="plans">
        <li>
            <span>Plus</span>
            <span class="price">$4.99/month</span>
        </li>
        <li>
            <span>Premium</span>
            <span class="price">$9.99/month</span>
        </li>
    </ul>
</div>
        <!-- iHeartRadio -->
        <div class="subscription-card">
    <img src="Logos/iheart_radio.png" alt="iHeartRadio Logo">
    <h3>iHeartRadio</h3>
    <ul class="plans">
        <li>
            <span>iHeartRadio Plus</span>
            <span class="price">$4.99/month</span>
        </li>
        <li>
            <span>iHeartRadio All Access</span>
            <span class="price">$9.99/month</span>
        </li>
    </ul>
</div>
        <!-- SoundCloud -->
        <div class="subscription-card">
    <img src="Logos/soundcloud.png" alt="SoundCloud Logo">
    <h3>SoundCloud</h3>
    <ul class="plans">
        <li>
            <span>SoundCloud Go</span>
            <span class="price">$4.99/month</span>
        </li>
        <li>
            <span>SoundCloud Go+</span>
            <span class="price">$9.99/month</span>
        </li>
    </ul>
</div>

</body>
</html>
