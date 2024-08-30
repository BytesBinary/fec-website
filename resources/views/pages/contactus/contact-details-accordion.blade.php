<div class="accordion accordion-flush" id="accordionFlushExample">
    @php $count = 0; @endphp
    @foreach ($contact_details as $contact_detail)
        @php $count++; @endphp
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button {{ $count === 1 ? '' : 'collapsed' }}" type="button"
                    data-bs-toggle="collapse" data-bs-target="#flush-collapse{{ $count }}"
                    aria-expanded="{{ $count === 1 ? 'true' : 'false' }}"
                    aria-controls="flush-collapse{{ $count }}">
                    {{ $contact_detail['title'] }}
                </button>
            </h2>
            <div id="flush-collapse{{ $count }}"
                class="accordion-collapse collapse {{ $count === 1 ? 'show' : '' }}"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">SL no.</th>
                                <th scope="col">Name</th>
                                <th scope="col">Designation/Section</th>
                                <th scope="col">Web-mail</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contact_detail['members'] as $contact)
                                <tr>
                                    <th scope="row">{{ $contact['sl'] }}</th>
                                    <td>{{ $contact['name'] }}</td>
                                    <td>{{ $contact['designation_section'] }}</td>
                                    <td><a href="mailto:{{ $contact['web_mail'] }}">{{ $contact['web_mail'] }}</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endforeach
</div>
