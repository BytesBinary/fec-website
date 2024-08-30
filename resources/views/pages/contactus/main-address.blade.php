<x-contact-page-card row-class-md="6" row-class-lg="6" logo-class="bi bi-geo-alt"
    title="{{ $main_address['location']['title'] }}" description="{{ $main_address['location']['details'] }}" />
<x-contact-page-card row-class-md="6" row-class-lg="3" logo-class="bi bi-telephone"
    title="{{ $main_address['phone']['title'] }}" description="{{ $main_address['phone']['details'] }}" />
<x-contact-page-card row-class-md="6" row-class-lg="3" logo-class="bi bi-envelope"
    title="{{ $main_address['email']['title'] }}" description="{{ $main_address['email']['details'] }}" />
