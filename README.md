# northcharge-woocommerce-customizations
NorthCharge – WooCommerce Customization Project

Live Website: https://northcharge.ca/shop/

1. Project Overview

NorthCharge combines technology and functionality to offer innovative EV charging solutions for both residential and commercial use. The platform provides high-quality and affordable EV charging products, helping customers choose reliable solutions that support their charging needs, environmental goals, and budget.
This project involved custom WooCommerce development and customization of key e-commerce pages, including the shop page, product pages, and related WooCommerce components.

2. WooCommerce Customization Implemented ?

The project required several custom WooCommerce modifications to meet the client’s specific business requirements.
Key work included:
Custom development of the Shop Page (Product Listing Page) according to client requirements
Fully customized Single Product Page layout and functionality
Customization of major WooCommerce e-commerce pages
Implementation of custom product variation handling on the shop page
Frontend UI customization using custom PHP, JavaScript, and CSS
Custom WooCommerce logic using actions and filters

3. Problem Solved

The client required a non-standard WooCommerce functionality on the shop page.
Instead of the default WooCommerce behavior, the requirement was:

a. Display all product variations directly in the product heading area
b. Show variations as selectable options in a dropdown
c. When a user selects a variation:
d. The product content, Pricing, Other product details.... should update dynamically on the page without navigating to another product page.
e. This required customizing the default WooCommerce variation handling and product data display logic.

4. Main Technical Challenge

One of the most challenging parts of this implementation was dynamically retrieving and displaying WooCommerce product variations on the shop page.
By default, WooCommerce manages variations mainly on the single product page, so implementing this behavior directly on the shop page listing required custom logic.

To solve this problem, the following approach was implemented:

First, the product ID was retrieved from the shop page listing.

Using the product ID, all associated variation IDs were fetched.

Each variation ID was then used to retrieve the variation name and details, which were used to populate the dropdown options in the product heading.

When a user selected a variation from the dropdown:

The selected variation ID was captured.

Based on that variation ID, the corresponding product content, price, and additional details were dynamically retrieved.

These details were then updated dynamically in the respective sections on the page.

This solution allowed users to interact with product variations directly from the shop page, improving usability and reducing unnecessary page navigation.

5. WordPress / WooCommerce Hooks Used

This implementation used both WordPress actions and filters to modify default WooCommerce behavior and inject custom functionality into the shop page and product display logic.

6. Performance Considerations

To ensure optimal performance:
Custom code was written instead of relying on heavy third-party plugins
WooCommerce functionality was extended using core hooks and custom logic
This approach helped maintain faster page load times and reduce plugin dependency

7. Technologies Used

WordPress
WooCommerce
PHP
JavaScript / jQuery
CSS

8. WordPress Hooks (Actions & Filters)

Live Website :- You can view the live implementation here:
https://northcharge.ca/shop/
