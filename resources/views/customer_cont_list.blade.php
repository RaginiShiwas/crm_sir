@extends('layouts.app')
@section('contant')

<div class="content">
    <div class="mb-9">
        <div class="row g-3 mb-4">
            <div class="col-auto">
                <h2 class="mb-0">Customer Contact List</h2>
            </div>
        </div>

        <div id="orderTable" data-list='{"valueNames":["party_name","print_name","party_code","under_group","address1","address2","city","pincode","state","country","pan_number","cell_number","email","edit"],"page":10,"pagination":true}'>
            <div class="mb-4">
                <div class="row g-3">
                    <div class="col-auto">
                        <div class="search-box">
                            <form class="position-relative" data-bs-toggle="search" data-bs-display="static">
                                <input class="form-control search-input search" type="search" placeholder="Search contacts" aria-label="Search" />
                                <span class="fas fa-search search-box-icon"></span>
                            </form>
                        </div>
                    </div>
                    <div class="col-auto scrollbar overflow-hidden-y flex-grow-1">
                        <div class="btn-group position-static" role="group"></div>
                    </div>
                    <div class="col-auto">
                        <button onclick="exportTableToExcel()" class="btn btn-primary">Export to Excel</button>
                        <button class="btn btn-primary" onclick="exportTableToPDF()">Export to PDF</button>
                        <a href="{{ url('/customer_cont') }}" class="btn btn-primary">Add Customer Contact</a>
                        <button id="viewAllEntries" class="btn btn-primary">View All Entries</button>
                    </div>
                </div>
            </div>

            <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-white border-top border-bottom border-200 position-relative top-1">
                <div class="table-responsive scrollbar mx-n1 px-1">
                    <table id="salesOrderTable" class="table table-sm fs--1 mb-0">
                        <thead>
                            <tr>
                                <th class="sort white-space-nowrap align-left pe-3" scope="col" data-sort="party_name">Party Name</th>
                                <th class="sort align-left " scope="col" data-sort="print_name">Print Name</th>
                                <th class="sort align-left ps-8" scope="col" data-sort="party_code">Party Code</th>
                                <th class="sort align-left pe-3" scope="col" data-sort="under_group">Under Group</th>
                                <th class="sort align-left text-start pe-3" scope="col" data-sort="address1">Address</th>
                                <th class="sort align-left text-start" scope="col" data-sort="address2">Address1</th>
                                <th class="sort align-left  pe-0" scope="col" data-sort="city">City</th>
                                <th class="sort align-left  pe-0" scope="col" data-sort="pincode">Enter Pin</th>
                                <th class="sort align-left  pe-0" scope="col" data-sort="state">State</th>
                                <th class="sort align-left  pe-0" scope="col" data-sort="country">Country</th>
                                <th class="sort align-left  pe-0" scope="col" data-sort="pan_number">PAN No.</th>
                                <th class="sort align-left  pe-0" scope="col" data-sort="cell_number">Cell Number</th>
                                <th class="sort align-left  pe-0" scope="col" data-sort="email">E-mail</th>
                                <th class="sort align-left  pe-0" scope="col" data-sort="edit">Edit</th>
                            </tr>
                        </thead>
                        <tbody class="list" id="order-table-body">
                            @foreach($parties as $party)
                            <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                <td class="party_name align-left">{{ $party->vendorname }}</td>
                                <td class="print_name align-left ">{{ $party->printname }}</td>
                                <td class="party_code align-left ">{{ $party->vendorcode }}</td>
                                <td class="under_group align-left">{{ $party->group ? $party->group->groupname : 'N/A' }}</td>
                                <td class="address1 align-left ">{{ $party->address1 }}</td>
                                <td class="address2 align-left ">{{ $party->address2 }}</td>
                                <td class="city align-left ">{{ $party->city }}</td>
                                <td class="pincode align-left ">{{ $party->pincode }}</td>
                                <td class="state align-left ">{{ $party->state }}</td>
                                <td class="country align-left ">{{ $party->countryid }}</td>
                                <td class="pan_number align-left ">{{ $party->pan_number }}</td>
                                <td class="cell_number align-left ">{{ $party->cellnumber }}</td>
                                <td class="email align-left ">{{ $party->email }}</td>
                                <td class="align-left ">
                                    <a href="{{ url('/edit_customer_cont', $party->id) }}" class="btn btn-sm btn-primary">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <script>
            function exportTableToPDF() {
                const { jsPDF } = window.jspdf;
                const doc = new jsPDF({
                    orientation: 'landscape',
                    unit: 'pt',
                    format: 'A4'
                });

                const rows = [];
                document.querySelectorAll('#order-table-body tr').forEach(row => {
                    const rowData = Array.from(row.querySelectorAll('td')).map(cell => cell.innerText);
                    rows.push(rowData);
                });

                const numColumns = 13;
                const pageWidth = doc.internal.pageSize.width;
                const margin = 40;
                const usableWidth = pageWidth - (2 * margin);
                const columnWidth = usableWidth / numColumns;

                const columnStyles = {};
                for (let i = 0; i < numColumns; i++) {
                    columnStyles[i] = { cellWidth: columnWidth };
                }

                doc.autoTable({
                    head: [['Party Name', 'Print Name', 'Party Code', 'Under Group', 'Address', 'Address1', 'City', 'Enter Pin', 'State', 'Country', 'PAN No.', 'Cell Number', 'E-mail']],
                    body: rows,
                    theme: 'striped',
                    styles: { 
                        fontSize: 10,
                        cellPadding: 3,
                        overflow: 'linebreak'
                    },
                    headStyles: {
                        fillColor: [41, 128, 185],
                        textColor: [255, 255, 255],
                        halign: 'center'
                    },
                    columnStyles: columnStyles,
                    margin: { top: margin, bottom: margin, left: margin, right: margin },
                    pageBreak: 'auto'
                });

                doc.save('customer_contacts.pdf');
            }

            function exportTableToExcel() {
                const rows = [];
                document.querySelectorAll('#order-table-body tr').forEach(row => {
                    const rowData = Array.from(row.querySelectorAll('td')).map(cell => cell.innerText);
                    rows.push(rowData);
                });

                const header = [['Party Name', 'Print Name', 'Party Code', 'Under Group', 'Address', 'Address1', 'City', 'Enter Pin', 'State', 'Country', 'PAN No.', 'Cell Number', 'E-mail']];
                const data = header.concat(rows);

                const wb = XLSX.utils.book_new();
                const ws = XLSX.utils.aoa_to_sheet(data);

                const wscols = [
                    { wch: 40 },
                    { wch: 40 },
                    { wch: 20 },
                    { wch: 20 },
                    { wch: 40 },
                    { wch: 40 },
                    { wch: 20 },
                    { wch: 20 },
                    { wch: 20 },
                    { wch: 20 },
                    { wch: 20 },
                    { wch: 20 },
                    { wch: 40 }
                ];

                ws['!cols'] = wscols;

                XLSX.utils.book_append_sheet(wb, ws, 'Table Data');

                XLSX.writeFile(wb, 'customer_contacts.xlsx');
            }

            $(document).ready(function() {
                var table = $('#salesOrderTable').DataTable({
                    pageLength: 10
                });

                $('#entriesSelect').on('change', function() {
                    var length = $(this).val();
                    table.page.len(length).draw();
                });

                $('#viewAllEntries').on('click', function() {
                    table.page.len(-1).draw();
                });
            });
        </script>
    </div>
</div>

@endsection
