<?php

/* -------------------------------------------------------------------------- */

defined('ABSPATH') or die('hmmm!');

/* -------------------------------------------------------------------------- */

function change_wpadminbar_style() {
    ?>
    <style>

        #wpbody {
            margin-top: 22px;
        }

        #wpadminbar {
            background: #373a3c !important;
            height: 55px;
        }

        #wpadminbar #wp-admin-bar-root-default,
        #wpadminbar #wp-admin-bar-root-secondary {
            margin: 11px 10px;
        }

        #wpadminbar ul#wp-admin-bar-root-default>li,
        .network-admin #wpadminbar ul#wp-admin-bar-top-secondary>li#wp-admin-bar-my-account {
            margin-right: 10px;
        }

        #wpadminbar .ab-top-menu>li.hover>.ab-item,
        #wpadminbar.nojq .quicklinks .ab-top-menu>li>.ab-item:focus,
        #wpadminbar:not(.mobile) .ab-top-menu>li:hover>.ab-item,
        #wpadminbar:not(.mobile) .ab-top-menu>li>.ab-item:focus {
            border-radius: 4px;
            background: transparent;
            color: #fff;
        }

        #wpadminbar:not(.mobile)>#wp-toolbar a:focus span.ab-label,
        #wpadminbar:not(.mobile)>#wp-toolbar li:hover span.ab-label,
        #wpadminbar>#wp-toolbar li.hover span.ab-label {
            color: #fff;
        }

        #wpadminbar .menupop .ab-sub-wrapper,
        #wpadminbar .shortlink-input {
        	color: #fff;
        	-webkit-box-shadow: none;
        	box-shadow: none;
        	background: #373a3c;
        }

        #wpadminbar .ab-submenu .ab-item {
        	color: #fff;
        }

        #wpadminbar .quicklinks .menupop ul.ab-sub-secondary,
        #wpadminbar .quicklinks .menupop ul.ab-sub-secondary .ab-submenu {
            background: #373a3c;
            color: #fff;
        }

        ul.ab-submenu a.ab-item:hover {
            color: #fff !important;
        }

		#adminmenu,
		#adminmenu .wp-submenu,
		#adminmenuback, #adminmenuwrap {
		    background-color: #373a3c;
		}

        @media screen and (max-width: 782px) {
            html #wpadminbar {
                height: 55px;
                min-width: 300px;
            }

            #wpadminbar, #wpadminbar * {
                font-size: 13px;
                font-weight: 400;
                line-height: 32px;
            }

            #wpadminbar #wp-admin-bar-root-default,
            #wpadminbar #wp-admin-bar-root-secondary {
                margin: 4px;
                margin-right: 10px;
            }

            #wp-toolbar>ul>li,
            #wpadminbar #wp-admin-bar-user-actions.ab-submenu img.avatar {
                display: block;
                display: initial;
            }

            #wpadminbar ul#wp-admin-bar-root-default>li,
            .network-admin #wpadminbar ul#wp-admin-bar-top-secondary>li#wp-admin-bar-my-account {
                margin-right: 10px;
                margin-left: 10px;
            }

            #wpadminbar .ab-top-menu>li.hover>.ab-item,
            #wpadminbar.nojq .quicklinks .ab-top-menu>li>.ab-item:focus,
            #wpadminbar:not(.mobile) .ab-top-menu>li:hover>.ab-item,
            #wpadminbar:not(.mobile) .ab-top-menu>li>.ab-item:focus {
                border: none;
                background: transparent;
            }
        }

    </style>
    <?php
}

add_action('wp_head', 'change_wpadminbar_style');
add_action('admin_head', 'change_wpadminbar_style');

/* -------------------------------------------------------------------------- */
