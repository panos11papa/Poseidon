<?php die("Access Denied"); ?>#x#a:2:{s:6:"result";a:5:{i:0;O:8:"stdClass":3:{s:4:"link";s:59:"https://virtuemart.net/news/508-paybox-with-new-3dsecure-v2";s:5:"title";s:51:"Paybox with new 3DSecure V2 and 4.0.6 release notes";s:11:"description";s:2613:"<p>The Paybox payment system of Verifone is extending more international. It has very interesting payment concepts. They support already more than 50.000 shops and do more than 140 Million transactions per year.</p>
<p>Equip your e-commerce site with a secure and recognised payment solution!<br />From a basic need to a more complex processing, Verifone secures your e-commerce flows by giving you access to over 30 payment methods.</p>
<p>15 years of experience with a wide range of customers<br />Paybox accompanies you in your daily life with a secure, modular and turnkey payment solution that meets all your needs.</p>
<p>With each transaction, you benefit from the advantages of a cross-channel, multi-bank, multi-payment means, multi-currency platform equipped with fraud management and reporting tools to facilitate the daily management of your business.</p>
<p>&nbsp;</p>
<h3>6&nbsp;good reasons to choose Paybox</h3>
<table>
<tbody>
<tr>
<td style="width: 350px; border-right: solid; border-width: 2px; height: 60px;">For you ...</td>
<td style="width: 300px; padding-left: 10px;">For your customers...</td>
</tr>
<tr>
<td style="width: 350px; border-right: solid; border-width: 2px; height: 60px;">Your bank account is credited every night.<br />Paybox does not collect your transactions</td>
<td style="width: 300px; padding-left: 10px;">Pay with the payment method they prefer</td>
</tr>
<tr>
<td style="width: 350px; border-right: solid; border-width: 2px; height: 60px;">A choice of payment methods appropriate to your<br />your business and your customers</td>
<td style="width: 300px; padding-left: 10px;">Convenient debit at the time of shipment, in installments, by subscription or in 1 click</td>
</tr>
<tr>
<td style="width: 350px; border-right: solid; border-width: 2px; height: 60px;">A flexibility of collections, reporting, refunds<br />refunds to satisfy your customers and build loyalty</td>
<td style="width: 300px; padding-left: 10px;">Quick refund in case of return on<br />the payment method used</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<p>Paybox is already integrated in our AIO installer, just update your installation, or use our full package to install Paybox with VirtueMart and Joomla!</p>
<p style="text-align: center;"><a class="button-primary" href="https://virtuemart.net/download">DOWNLOAD VirtueMart 4 <br /> NOW</a></p>
<h4>4.0.6 release notes</h4>
<p>This release is for two critical bugs. The security feature for orderUpdate was too secure and blocked updating orders of guests. The other problem was in vRequest which uses the data of the router better now.</p>";}i:1;O:8:"stdClass":3:{s:4:"link";s:52:"https://virtuemart.net/news/507-bugfix-release-4-0-4";s:5:"title";s:20:"Bugfix release 4.0.4";s:11:"description";s:3338:"<p><img src="https://virtuemart.net/images/croatiaMaxMilbers.jpg" alt="croatiaMaxMilbers" /></p>
<p style="text-align: justify;"><small>croatian coast, Copyright Max Milbers</small></p>
<p>VirtueMart 4.0.4 contains various bug fixes and improvements. Especially it solves some problems reported to us after the release of the previous version of VirtueMart when it is used along with Joomla 4.1.x.<br />Fixes and changes and enhancements included in this version are:</p>
<h4>Joomla 4</h4>
<ul>
<li>Fixed saving the sorting of items in j4</li>
<li>Fixed chosen update for j4, needs another trigger</li>
<li>New jQuery for j3 (j4 one)</li>
<li>Updated xmls so they should work for j3 and j4</li>
<li>Added a missing j4 adjustment to the vmloaderpluginupdate plugin</li>
</ul>
<h4>Developer new technics</h4>
<ul>
<li>vmJsApi new method to push JHtml execution in a queque like we do with our js already. The queque is executed with writeJS</li>
<li>sku, gtin, mpn only shown for is_input customs</li>
<li>updateStatusForOneOrder is only executed if there is a given virtuemart_order_id and if the entry already exists</li>
<li>vmplugin function storePluginInternalData converts the decimals, too</li>
<li>Updated state published in the product model, for listing we now use list.published and some other minors in product model</li>
</ul>
<h4>Templater</h4>
<ul>
<li>New classes for Multivariant dropdowns</li>
<li>Horme3 removed $app-&gt;isAdmin</li>
<li>Just some better use of existing functions "loadPopUpLib"</li>
</ul>
<h4>Fixes</h4>
<ul>
<li>Enhanced router using static functions and values (all static) and remanaged it for better debugging</li>
<li>Fixed initialisation of language in router, if language was not loaded the first time with loadConfig</li>
<li>The debug of the router was sometimes called without loading the config and failed</li>
<li>Changed key field_type_searchable_published from unique to key and minors</li>
<li>GUI, changed maximum input for order status</li>
<li>Replaced all %1s and %1d to %1$s and %1$d in EN and DE language files due %1s and %1d causing problems</li>
<li>Found big error which lead to wrong inserts/updates, if the same entry was stored within the same call again.</li>
<li>Fix for vmView, added parameter for construct and added setting of VmView::$bs in getVmSubLayoutPath</li>
<li>Replaced deprecated FILTER_SANITIZE_STRING against FILTER_SANITIZE_FULL_SPECIAL_CHARS</li>
</ul>
<h4>Enhancements</h4>
<ul>
<li>Added a new option in vmloaderpluginupdate to load config with or without language</li>
<li>Categories do not load anylonger the parents for the breadcrumbs in the Backend for faster listing</li>
<li>Some work on the languages. If a language is selected, which exists in joomla but not in the vm config, it should show the joomla language and only the vm content stored in tables like product description should use the fallback.</li>
<li>JPEG images create thumbs with JPG</li>
<li>Enhanced handling of storing a new custom proto type if type is plugin but no plugin set</li>
<li>Enhanced vmecho for better measuring time. It sums up the time needed for a particular function, but not the time between calls to the function</li>
</ul>
<p style="text-align: center;"><a class="button-primary" href="https://virtuemart.net/download">DOWNLOAD VirtueMart 4 <br /> NOW</a></p>";}i:2;O:8:"stdClass":3:{s:4:"link";s:44:"https://virtuemart.net/news/506-virtuemart-4";s:5:"title";s:12:"VirtueMart 4";s:11:"description";s:8194:"<p style="text-align: justify;">We are pleased to release a new VirtueMart generation, which adds compatibility with Joomla 4 and PHP8. VirtueMart 4 comes with a new overridable Bootstrap 3 frontend template (Bootstrap 5 will follow soon) and new backend template. Of course there are also new features for the product presentation, a lot of bugfixes and some new programming techniques. We originally had planned to release this on Christmas, but it was not possible to keep the date due to many changes applied to joomla 4 after it's initial release. We still have to iron out a few minor complications with it, but it already works for a number of early adopters..</p>
<p><img src="https://virtuemart.net/images/vm4_newshead6_blur_small.jpg" alt="" width="690" /></p>
<h4 style="text-align: justify;">The Backend Template</h4>
<p style="text-align: justify;">The new backend template uses VMUI-Kit. Unluckily this is not ideal for Joomla 4, but BS5 will be added soon. You can choose between four different color styles and it works well on mobiles. Updaters must install it manually, because it is handled as an installable template and is not part of the VirtueMart core installation package.</p>
<h4 style="text-align: justify;">New backend features and tools</h4>
<p style="text-align: justify;">VirtueMart 4 not only has a new look, but also new functions in the backend. For example, Multivariants with children can now be autogenerated with permutating variants. Customfields can have their own SKU, GTIN, MPN. The order status was previously limited to a single character and is now extended to 3 chars. The category dropdown in the "product.edit" view now also lists unpublished categories. Original language flags (as we have already for other edits) now added to the payment and shipment edit views. RuposTel donated a google like search for products and orders. So for example use sku:mySkuToSearch to let VM search only within the SKUs.</p>
<p style="text-align: justify;">Also there are two new maintenance tools. The first one is a synchronizer consisting of three buttons, which sets country 2, country 3 and country numerical code in the country list correctly according to ISO 3166. The second one is a converter button for changing old utf8mb3 tables to utf8mb4 tables.</p>
<h4 style="text-align: justify;">New frontend template</h4>
<p style="text-align: justify;">Spyros Petrakis has generously donated his Horme3 template for the VirtueMart Core. Another new feature which you will find most useful is the the setting for different Bootstrap layouts, which was not fully implemented yet and therefore useless, ...until now! Selecting the Bootstrap 3 layouts in the configuration will load these layouts from the core. So we can now use any Bootstrap 3 template without overrides, because VirtueMart 4 loads the Horme3 ones. This also gives new users the possibility to use old override techniques. We are planning to extend this technique to modules and css. Work is already in progress to provide the same technique for Bootstrap 5.</p>
<p style="text-align: justify;">The javascript also received a general overhaul, so it is more reliable, should work better on different browsers and is easier to handle for templaters (working relative or with classes instead of ids). The new fancybox 1.3.4.2 is working with the new jQuery version now.</p>
<h4 style="text-align: justify;">Paybox</h4>
<p style="text-align: justify;">The payment plugin Paybox got a general overhaul and works now with 3Dsecure V2</p>
<h4 style="text-align: justify;">Product Bundles</h4>
<p style="text-align: justify;">are a very mighty new feature. It can be used as typical bundle of different products for one price. This was also possible before by just creating a product which listed the included products. But this method required a lot maintenance. The inventory just listed a sold bundle, but did not update the inventory per product. If you sold a bundled product also as a bulk-version, then the system used two different products. If you updated the price of the bulk version, nothing changed on the bundles version. Not any longer! The new product bundles make real bundles of different existing VirtueMart products. They can be included for free or also as variants with an extra price. The prices can be a fixed amount or a percentage. So it can also be used for cross-selling and discounts.</p>
<h4 style="text-align: justify;">Extra related product groups</h4>
<p style="text-align: justify;">are also used for cross-selling or presentation of complementary items. They are basically the same as the default related products, but can have another title and appear somewhere on product details page.</p>
<h4 style="text-align: justify;">Better search with tags</h4>
<p style="text-align: justify;">Enhanced search using the customfield searchable tag system. Searching for more than 1 tag now displays only products fitting to any requested tag..</p>
<h4 style="text-align: justify;">Keep cart content for guests</h4>
<p style="text-align: justify;">Added storing of carts for unregistered users as a cookie. This works only for SSL secured pages.</p>
<h4 style="text-align: justify;">and more</h4>
<ul>
<li style="text-align: justify;">really a lot work on caches (internal, external), table indexes and other optimisations.</li>
<li style="text-align: justify;">additionally general work to please the JED Checker.</li>
<li style="text-align: justify;">option to display thumbnails to select children of multivariants.</li>
<li style="text-align: justify;">different email layouts by order status to enhance the customer communication.</li>
<li style="text-align: justify;">you can create a category menu item which clears the cart by category.</li>
</ul>
<h3>Changes for developers</h3>
<p>ATTENTION: Triggers are case sensitive in joomla 4! <br />Changed triggers:</p>
<ul>
<li>plgVmOnStoreProduct($data, $plugin_param) changed to function plgVmOnStoreProduct($data, $plugin_param, $key)</li>
<li>plgVmonSelectedCalculatePrice to plgVmOnSelectedCalculatePrice (lower to upper case)</li>
<li>in calculation plgVmOnDisplayEdit to plgVmOnDisplayEditCalc</li>
</ul>
<p>new triggers</p>
<ul>
<li>product and order model, added new trigger plgVmMySortSearchListProductsQuery respectivly plgVmMySortSearchListOrdersQuery in exeSortSearchListQuery which is at begin and can takeover the whole function (for searchplugins)</li>
</ul>
<p>Plugin Handler</p>
<ul>
<li>Added vdispatcher.php as proxy for the joomla dispatcher</li>
<li>We can use now $results = vDispatcher::trigger('event', array(param1, param2,...));</li>
<li>the directTrigger can now execute a certain event of a plugin family, too.</li>
<li>added function reloadPlugins, which loads again the payment/shipment methods of the plugins. The cart unloads them, if they do not fit, 3rd party developer can reload them, that way.</li>
</ul>
<p>Technics</p>
<ul>
<li>setConvertDecimal for plugins, tables</li>
<li>set datefields for tables</li>
<li>$this-&gt;_genericVendorId = false prevents that the tables sets the virtuemart_vendor_id generically</li>
<li>added extra parameter to vmuploader so that it works also with other input names</li>
<li>the product model sortSearchListQuery is now working with an extra parameter, which can override an "Request" variables. So using old vRequests parameters is just used as fallback now.</li>
<li>function getProductListing is now using request params only for the group "products", not for the other groups like featured, recent, topten, and so on</li>
<li>vmecho again a bit enhanced, if debug is activated vmInfo are quequed as vmdebug (so the messages appear in the real order)</li>
<li>field products, added a category filter</li>
<li>changed ajax js for dynamic page reload, a ready script in the layout is not needed anylonger</li>
<li>added cart functions getCartWeight and getCartQuantity</li>
<li>removed the problem that a delivery note created an invoiceNumber</li>
<li>Time of the calculationHelper considers offset</li>
</ul>
<p style="text-align: center;"><a class="button-primary" href="https://virtuemart.net/download">DOWNLOAD VirtueMart 4 <br /> NOW</a></p>";}i:3;O:8:"stdClass":3:{s:4:"link";s:57:"https://virtuemart.net/news/505-virtuemart-4-for-joomla-4";s:5:"title";s:25:"VirtueMart 4 for Joomla 4";s:11:"description";s:2368:"<p style="text-align: justify;">We know you are all expecting VirtueMart 4 for Joomla 4 to be released soon. We are almost there. Our new version is being tested daily in various test environments and most features are working to our satisfaction. So well, in fact, that the first VM testers are planning to go live with smaller stores soon.</p>
<h2 style="text-align: justify;">VirtueMart 4 Update Procedure</h2>
<p style="text-align: justify;">Upgrade or Migration? Don't worry, the changes in Joomla 4 are substantial in some areas, but we have made sure that you can update from VirtueMart 3 to VirtueMart 4 like a normal update, mostly with just a click of a button. We can provide you with an installation package that is compatible with Joomla 3 and Joomla 4.</p>
<h2 style="text-align: justify;">VirtueMart 4 loves Testers</h2>
<nav>
<p style="text-align: justify;">Due to the extensive changes we still have some work remaining and would be happy if you test our current RC versions for Joomla 3 and Joomla 4, which you can find at <a class="btn" href="https://dev.virtuemart.net/projects/virtuemart/files">dev.virtuemart.net</a></p>
</nav>
<p style="text-align: justify;"><img src="https://virtuemart.net/images/Panorama-Lilienstein-von-Waitsdorf.jpg" alt="Panorama Lilienstein von Waitsdorf" /></p>
<p style="text-align: justify;"><small>Saxonian Swizz Lilienstein, Copyright Max Milbers</small></p>
<h2 style="text-align: justify;">Next Release</h2>
<p style="text-align: justify;">We will soon provide a new version, even if it is not yet fully perfected for Joomla 4, as we have also made many enhancements for existing VirtueMart stores with Joomla 3.</p>
<h2 style="text-align: justify;">When to Update?</h2>
<p style="text-align: justify;">Joomla 3.10 is officially supported until August 17, 2023. So there is no need to rush to update to Joomla 4 immediately. Joomla 4 is still a new software, so we recommend to wait a bit with live store updates until the community has fully tested Joomla 4. New software always tends to have some bugs that need to be discovered and ironed out in the beginning.</p>
<p style="text-align: justify;">Help Joomla 4 and VirtueMart 4 by testing in your test environments.</p>
<p style="text-align: justify;">We expect that late spring 2022 will be a good time to update the first live stores without any problems.</p>";}i:4;O:8:"stdClass":3:{s:4:"link";s:104:"https://virtuemart.net/news/503-release-virtuemart-3-8-8-updated-administrator-interface-template-design";s:5:"title";s:74:"Release VirtueMart 3.8.8 - Updated administrator interface template design";s:11:"description";s:7583:"<p>Here are some words by the leader of VirtueMart (Max Milbers): <em>These are ambivalent times. On one hand life changed completly for most members, on the other hand it offers new opportunities. In my case, I am currently very busy with the lockdown problems. Literally getting a simple screw is suddenly a big time consuming problem. Politics divide people and business. I got indirect questions, asking if VirtueMart is going to take measures concerning it's 'political correct use'. When I joined <em>VirtueMart</em>, my goal was to create a free shop system for the people. VirtueMart is a free Open source system for anyone. No community member can controll, what you sell with it. It is not our responsibility. Personally I believe in the good will of people and that no one should judge about others without walking in their shoes for a while. We, the VirtueMart communtiy, have members all over the world.&nbsp;Let's keep it that way! </em></p>
<p>Now back to VirtueMart. We tried already a year ago to create a new admin template. This time our team member Valerie Isaksen of alatak.net broke through the obstacles and lightend a new fire for the new administrator template. The old template will be later merged into the new template and provided as style, or theme (it won't be exactly the same). The new admin template is currently provided as backend template. Updaters should use our <strong>package</strong>&nbsp;(use the big blue download button) to get the new admin template. You can just install the package over your current installation. It ensures that you get also the latest tcpdf and vmbeez. But you can also extract it and install the vmadmin.zip. This way ensures that the changes in the backend template do not interfere any productive installation.</p>
<h2>Updated administrator interface template design</h2>
<p>A new administrator template is available for testing which improves mobile and desktop appearance and usability for shop administrators.</p>
<p>Modern icons are used to represent key features and give the interface a cleaner appearance.</p>
<p>Feedback tells us that the rich core features and configuration flexibility remain a core aspect of why VirtueMart is a great choice for Joomla ecommerce.</p>
<p>This is therefore a template UI update and not a complete redesign of administration pages. Shop owners will still find their business information and configurations in the same place.</p>
<p>A small number of configuration screens have had their look slightly modified using icons and give a more consistent alignment of features/fieldnames with input/selection.</p>
<p><img class="size-auto align-left" style="margin-bottom: 20px; display: block; margin-left: auto; margin-right: auto;" src="https://virtuemart.net//images/stories/orders.png" alt="" /></p>
<p style="text-align: center;"><a class="button-primary" href="https://virtuemart.net/download">DOWNLOAD VM3 NOW<br /> VirtueMart 3 component (core and AIO)</a></p>
<h2>Highlights</h2>
<ul class="check">
<li>Sidebar
<ul>
<li>Cleaner look and feel toggle functionality.</li>
<li>Is hidden completely and available via slide or overlay toggle in all views - giving more space for information to be displayed</li>
</ul>
</li>
<li>Mobile/Tablet:
<ul>
<li>List displays for the majority of VM administration functions now wrap effectively.</li>
<li>Function selections (filter/search) are shown correctly.</li>
<li>Alignment of fieldname with selection/input facilitates easier desktop viewing and significantly improves UI on Mobile/Tablets.</li>
</ul>
</li>
<li>General
<ul>
<li>General improved use of icons.</li>
<li>Cleaner tab selections for multipage configurations.</li>
<li>Simple radio yes/no selectors now align with Joomla UI look and feel.</li>
<li>Image view and upload - small design change improvement for Products/Categories/Manufacturers and Media.</li>
</ul>
</li>
</ul>
<p><img class="size-auto align-left" style="display: block; margin-left: auto; margin-right: auto;" src="https://virtuemart.net//images/stories/order.png" alt="" /></p>
<p style="text-align: center;"><a class="button-primary" href="https://virtuemart.net/download">DOWNLOAD VM3 NOW<br /> VirtueMart 3 component (core and AIO)</a></p>
<h2>New features, enhancements, fixes</h2>
<h3>Enhanced or new</h3>
<ul>
<li>Skrill payment update</li>
<li>Removed shop is offline feature. Added instead a link showing better possibilities todo that (Using joomla or catalog mode).</li>
<li>Restriction for shipment/payment byCoupon</li>
<li>Extra order note. Just a simple note for orders for internal use.</li>
<li>Order list searches now also for the customer_note and order_note</li>
<li>Order list now also filterable by vendor</li>
<li>New options of storing carts (currently per hidden configuration)<ol>
<li>#CartsDontSave = 0 //dont store carts for logged in shoppers</li>
<li>#CartsDontSaveByshoppergroup=50 //dont store carts for shoppers in this shoppergroup</li>
<li>#CartsDontSaveCartFields=1 //dont store cart fields when storing a cart for a shopper</li>
</ol></li>
<li>Order model function getOrder loads now the whole data of an order status (interesting for templaters)</li>
<li>Multiple category filter for product list in the backend. Disabled by default, currently you can enable it by hidden config AllowMultipleCatsFilter=1</li>
</ul>
<h3>New for developer</h3>
<ul>
<li>new pattern if an array is given, and we need the first item then we use now reset and not the 0 item.</li>
<li>New Trigger in storeProductCustomfields, for removed customfields.</li>
<li>Added "andWhere" function to parameter to VmTableXarray load function, added function loadOrderingCurrentItem</li>
<li>VmTable cleaned ordering, added function loadOrderingCurrentItem</li>
<li>PHP 8 compatibility, bugs may still occur.</li>
</ul>
<h3>Fixes</h3>
<ul>
<li>Ordering for products</li>
<li>All nasty warnings like "Warning: Parameter 1 to plgVmShipmentWeight_countries::plgVmOnSelectCheckShipment() expected to be a reference, value given in /var/www/vhosts/..../libraries/joomla/event/event.php on line 70"</li>
<li>time for coupons is from now on not "NOW" but "timestamp_utc"</li>
<li>Fix for 1054 Unknown column 'Array' in 'where clause after update to 3.8.6 http://forum.virtuemart.net/index.php?topic=145855.30 Fix for ordering of products if products of subcategories shown</li>
<li>The order detail links in the email consider the case, that neither guest link, nor registered is set</li>
<li>Feature that registered users must activate themself</li>
<li>getUserInfoInUserFields getting the right joomla user data per given id</li>
<li>Missing cart error message in js</li>
<li>Missing '' for constant VMPATH_ROOT in installer script</li>
<li>Removed useless \n in Sample shop decription</li>
<li>getVendorAddressFields when a administrator and vendor edits another vendor.</li>
<li>category model calls to clearCategoryRelatedCaches</li>
<li>language of shipment plugin in order view</li>
<li>added chosenDropDowns in cart default shopperform</li>
<li>little fix for custom cartlayout</li>
<li>Copyright years updated, renamed variables and other minors</li>
<li>fixed a lot warnings of the type "Deprecated: Required parameter $isSite follows optional parameter $selectedCategories in /var/www/vhosts/.../administrator/components/com_virtuemart/helpers/shopfunctions.php on line 652". So we are already prepared for PHP8.</li>
</ul>
<p style="text-align: center;"><a class="button-primary" href="https://virtuemart.net/download">DOWNLOAD VM3 NOW<br /> VirtueMart 3 component (core and AIO)</a></p>";}}s:6:"output";s:0:"";}