<x-app-layout>
    
    <!-- Canvas -->
    <div class="grid grid-cols-5 bg-[#f0f2f5] grid-row-4">

        <!-- Employee Masterlist -->
        <div class="col-start-2 my-[2.36rem] mx-[3rem] col-span-4 bg-[#FFFFFF] py-[2.81rem] px-[2.84rem] border-2 border-black mt-[2.38rem]" style="background-image: url('logos/background-with-grid-bw.png'); background-size: contain;">
            <div>
                <h1 class="text-[1.875rem] uppercase font-bold ibm-plex-mono" style="color: black; text-shadow: 0 0 2px #888888;">Employee List</h1>
                <img class="mt-[1.94rem] mb-[2.31rem]" src="{{ asset('logos/line-bw.png') }}" alt="TVA Line" style="height: 10px;">
                <div class="grid gap-5">
                
                    <div id="selectedDetaineeId"></div>
                    
                    <div class="flex flex-col gap-4" >
                        <label class="form-label block labelname font-bold mb-2">Detainees</label>
                        @php
                            $counter = count($employees);
                        @endphp
                        @foreach ($employees as $employee)
                            <div class="flex space-x-4" onclick="selectedID(this, {{ $employee->id }})">
                                <div class="flex flex-row border-black border rounded py-4 px-4 w-full leading-tight focus:outline-none focus:border-black relative">
                                    <div class="flex items-center">
                                        <!-- <div style="background-color: black; height: 85px; width: 85px; border-radius: 100%;"></div> -->
                                        <div class=>
                                            <p class="text-left mb-2 font-bold">{{ $employee->firstname }} {{ $employee->middlename }} {{ $employee->lastname }}</p>
                                            <p class="text-left mb-2">ID: {{ $employee->id }}</p>
                                            <p class="text-left mb-2">Employment Number: {{ $employee->emp_num }}</p>
                                            <p class="text-left mb-2">Address Line: {{ $employee->address_line }}</p>
                                            <p class="text-left mb-2">Barangay: {{ $employee->brgy }}</p>
                                            <p class="text-left mb-2">Province: {{ $employee->province }}</p>
                                            <p class="text-left mb-2">Country: {{ $employee->country }}</p>
                                            <p class="text-left mb-2">Zip Code: {{ $employee->zipcode }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- <div class="flex flex-row justify-end gap-2.5 mt-[2.12rem]">
                        <a href="{{ route('employees.details') }}" class="inline-block bg-blue-500 text-white font-semibold py-2 px-4 rounded hover:bg-blue-600 mb-4">View Employee List</a>
                        <a href="{{ url('view-detainee', ['id' => 'detainee_id_placeholder']) }}" class="buttonFormat border-2 border-black bg-rgba(165, 42, 42, 0) hover:bg-black text-black hover:text-white font-bold py-4 px-4">VIEW EMPLOYEE DETAILS</a>
                        <a href="{{ route('employees.create') }}" class="buttonFormat border-2 border-black bg-rgba(165, 42, 42, 0) hover:bg-black text-black hover:text-white font-bold py-4 px-4">ADD NEW EMPLOYEE</a>
                        <a href="{{ url('edit-detainee' , ['id' => 'detainee_id_placeholder']) }}" class="buttonFormat border-2 border-black bg-rgba(165, 42, 42, 0) hover:bg-black text-black hover:text-white font-bold py-4 px-4">EDIT</a>
                        <a href="{{ url('delete-detainee' , ['id' => 'detainee_id_placeholder']) }}" class="buttonFormat border-2 border-black bg-rgba(165, 42, 42, 0) hover:bg-black text-black hover:text-white font-bold py-4 px-4" onclick="return confirm('Are you sure you want to delete this detainee?')">DELETE</a>
                    </div> -->

                </div>
            </div>
            
        </div>
    </div>

    <script>
        function selectedID(clickedElement, employeeId) {

            var allCards = document.querySelectorAll('.flex.space-x-4');
            allCards.forEach(function(card) {
                if (card !== clickedElement) {
                    card.classList.remove('selected');
                }
            });

            clickedElement.classList.toggle('selected');

            var viewEmployeeButton = document.querySelector('a[href*="view-detainee"]');
            if (viewEmployeeButton) {
                viewEmployeeButton.href = employeeId ? viewEmployeeButton.href.replace('employee_id_placeholder', employeeId) : 'javascript:void(0);';
            }

            var editButton = document.querySelector('a[href*="edit-detainee"]');
            if (editButton) {
                editButton.href = detaineeId ? editButton.href.replace('detainee_id_placeholder', detaineeId) : 'javascript:void(0);';
            }

            var deleteButton = document.querySelector('a[href*="delete-detainee"]');
            if (deleteButton) {
                deleteButton.href = detaineeId ? deleteButton.href.replace('detainee_id_placeholder', detaineeId) : 'javascript:void(0);';
            }

            var assignAttorneyButton = document.querySelector('a[href*="assign-attorney"]');
            if (assignAttorneyButton) {
                assignAttorneyButton.href = detaineeId ? assignAttorneyButton.href.replace('detainee_id_placeholder', detaineeId) : 'javascript:void(0);';
            }

            var assignCaseButton = document.querySelector('a[href*="add-cases"]');
            if (assignCaseButton) {
                assignCaseButton.href = detaineeId ? assignCaseButton.href.replace('detainee_id_placeholder', detaineeId) : 'javascript:void(0);';
            }

            var selectedDetaineeIdBox = document.getElementById('selectedDetaineeId');
            selectedDetaineeIdBox.textContent = detaineeId ? 'Selected Detainee ID: ' + detaineeId : 'No Detainee Selected'; // For Checking lang if nakuha yung ID

        }
    </script>

</x-app-layout>