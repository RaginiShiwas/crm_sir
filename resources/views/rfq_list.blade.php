@extends('layouts.app')
@section('contant')

<div class="content">
    <div class="mb-9">
        <div class="row g-3 mb-4">
            <div class="col-auto">
                <h2 class="mb-0">RFQ List</h2>
            </div>
        </div>
        
        <div id="orderTable" data-list='{"valueNames":["Date","Technician","CID#","Bussiness Name","POC","City","State","PIN Code","Phone Number","Email","Number","Product Name","Quanity","Labor Hours","Additional Information","edit"],"page":,"pagination":true}'>
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
                        <div class="btn-group position-static" role="group">
                        </div>
                    </div>
                    <div class="col-auto">
          <button onclick="exportTableToExcel()" class="btn btn-primary">Export to Excel</button>

            <button class="btn btn-primary" onclick="exportTableToPDF()">Export to PDF</button>
            <a href="{{ url('/rfq') }}" class="btn btn-primary">Add RFQ</a>
            <button class="btn btn-primary" id="viewAllBtn">View All</button>
          </div>
        </div>
      </div>


            <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-white border-top border-bottom border-200 position-relative top-1">
                <div class="table-responsive scrollbar mx-n1 px-1">
                    <table id="commodityTable" class="table table-sm fs--1 mb-0 align-left">
                        <thead>
                            <tr>
                            <th class="sort white-space-nowrap align-left " scope="col" data-sort="Date">Date</th>
                <th class="sort align-left " scope="col" data-sort="Technician">Technician</th>
                <th class="sort align-left " scope="col" data-sort="CID#">CID#</th>
                <th class="sort align-left " scope="col" data-sort="Bussiness Name">Bussiness Name</th>
                <th class="sort align-left " scope="col" data-sort="POC">POC</th>
                <th class="sort align-left " scope="col" data-sort="City">City</th>
                <th class="sort align-left  " scope="col" data-sort="State">State</th>
                <th class="sort align-left  " scope="col" data-sort="PIN Code">PIN Code</th>
                <th class="sort align-left  " scope="col" data-sort="Phone Number">Phone Number</th>
                <th class="sort align-left  " scope="col" data-sort="Email">Email</th>
                <th class="sort align-left  " scope="col" data-sort="Number">Number</th>
                <th class="sort align-left  " scope="col" data-sort="Product Name">Product Name</th>
                <th class="sort align-left  " scope="col" data-sort="Quanity">Quanity</th>
                <th class="sort align-left  " scope="col" data-sort="Labor Hours">Labor Hours</th>
                <th class="sort align-left  " scope="col" data-sort="Additional Information">Additional Information</th>
                <th class="sort align-left  " scope="col" data-sort="Edit">Edit</th>
               </thead>

                        <tbody class="list" id="order-table-body">
                        @foreach($rfqs as $rfq)
                                <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                    <td class="align-left">{{ $rfq->date }}</td>
                                    <td class="align-left ">{{ $rfq->tech }}</td>
                                    <td class="align-left ">{{ $rfq->cid }}</td>
                                    <td class="align-left ">{{ $rfq->bussiness }}</td>
                                    <td class="align-left ">{{ $rfq->poc }}</td>
                                    <td class="align-left ">{{ $rfq->city }}</td>
                                    <td class="align-left ">{{ $rfq->state }}</td>
                                    <td class="align-left ">{{ $rfq->pincode }}</td>
                                    <td class="align-left ">{{ $rfq->phone_no }}</td>
                                    <td class="align-left ">{{ $rfq->email }}</td>
                                    <td class="align-left ">{{ $rfq->number }}</td>
                                    <td class="align-left ">{{ $rfq->product_1 }}</td>
                                    <td class="align-left ">{{ $rfq->quanity_1 }}</td>
                                    <td class="align-left ">{{ $rfq->labor }}</td>
                                    <td class="align-left ">{{ $rfq->add_info }}</td>
                                    <td class="align-left ">
                                        <a href="{{ route('rfq.edit', $rfq->id) }}" class="btn btn-sm btn-primary">
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
    </div>
</div>

<script>
function exportTableToPDF() {
    const { jsPDF } = window.jspdf;
    const doc = new jsPDF({
        orientation: 'landscape', // Landscape orientation to fit more columns
        unit: 'pt', // Points, the unit used by jsPDF
        format: 'A4' // A4 size
    });

    // Extracting data from the table
    const rows = [];
    document.querySelectorAll('#order-table-body tr').forEach(row => {
        const rowData = Array.from(row.querySelectorAll('td')).map(cell => cell.innerText);
        rows.push(rowData);
    });

    // Define the number of columns
    const numColumns =16;
    // Calculate the equal width for each column to fit A4 landscape
    const pageWidth = doc.internal.pageSize.width;
    const pageHeight = doc.internal.pageSize.height;
    const margin = 40;
    const usableWidth = pageWidth - (2 * margin);
    const columnWidth = usableWidth / numColumns;

    // Define column widths equally
    const columnStyles = {};
    for (let i = 0; i < numColumns; i++) {
        columnStyles[i] = { cellWidth: columnWidth };
    }

    // Generate the table
    doc.autoTable({
        head: [['Date', 'Technician', 'CID#', 'Bussiness Name', 'POC', 'City', 'State', 'PIN Code','Phone Number','Email','Number','Product Name','Quanity','Labor Hours','Additional Information']],
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

    // Saving the generated PDF
    doc.save('rfq_list.pdf');
}
</script>

  <script>
 function exportTableToExcel() {
            // Extracting data from the table
            const rows = [];
            document.querySelectorAll('#order-table-body tr').forEach(row => {
                const rowData = Array.from(row.querySelectorAll('td')).map(cell => cell.innerText);
                rows.push(rowData);
            });

            // Adding the headers
            const header = [['Date', 'Technician', 'CID#', 'Bussiness Name', 'POC', 'City', 'State', 'PIN Code','Phone Number','Email','Number','Product Name','Quanity','Labor Hours','Additional Information']];
            const data = header.concat(rows);

            // Create a new workbook and a new worksheet
            const wb = XLSX.utils.book_new();
            const ws = XLSX.utils.aoa_to_sheet(data);

            // Adjust column widths
            const wscols = [
                {wch: 20}, // "wch" means "width in characters"
                {wch: 20},
                {wch: 20},
                {wch: 20},
                {wch: 20},
                {wch: 20},
                {wch: 20},
                {wch: 20}, // "wch" means "width in characters"
                {wch: 20},
                {wch: 20},
                {wch: 20},
                {wch: 40},
                {wch: 20},
                {wch: 20},
                {wch: 20},
                {wch: 20}

               
            ];

            ws['!cols'] = wscols;

            // Append the worksheet to the workbook
            XLSX.utils.book_append_sheet(wb, ws, 'Table Data');

            // Export the workbook to an Excel file
            XLSX.writeFile(wb, 'rfq_list.xlsx');
        }
    </script>
<script>
$(document).ready(function() {
    var table = $('#commodityTable').DataTable({
        pageLength: 10
    });

    $('#viewAllBtn').on('click', function() {
        table.page.len(-1).draw();
    });
});
</script>

@endsection
