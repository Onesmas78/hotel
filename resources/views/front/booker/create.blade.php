@extends('layouts.main')



@section('content')
    <div id="smartwizard">
        <ul class="nav">
            <li>
                <a class="nav-link" href="#step-1">
                    Step 1
                </a>
            </li>
            <li>
                <a class="nav-link" href="#step-2">
                    Step 2
                </a>
            </li>
            <li>
                <a class="nav-link" href="#step-3">
                    Step 3
                </a>
            </li>
            <li>
                <a class="nav-link" href="#step-4">
                    Step 4
                </a>
            </li>
        </ul>

        <div class="tab-content">
            <div id="step-1" class="tab-pane" role="tabpanel">
                Step content
            </div>
            <div id="step-2" class="tab-pane" role="tabpanel">
                Step content
            </div>
            <div id="step-3" class="tab-pane" role="tabpanel">
                Step content
            </div>
            <div id="step-4" class="tab-pane" role="tabpanel">
                Step content
            </div>
        </div>
    </div>

@endsection

<script defer>
    $(document).ready(function() {
        /*========== SMARTWIZARD ==========*/
        $('#smartwizard').smartWizard({
            selected: 0, // Initial selected step, 0 = first step
            theme: 'dots', // theme for the wizard, related css need to include for other than default theme
            justified: true,
        });
    });

</script>
