<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use Dompdf\Options;

class PdfController extends Controller
{
    public function quotationPdf()
    {
        // สร้าง Object Dompdf
        $dompdf = new Dompdf();

        // โหลด HTML ที่ต้องการแปลงเป็น PDF
        $html = view('pdf_quotation')->render();

        // โหลด HTML ลงใน Dompdf
        $dompdf->loadHtml($html);

        // ตั้งค่าขนาดเอกสารและแบบกระดาษ
        $dompdf->setPaper('A4', 'portrait');

        // Render PDF
        $dompdf->render();

        // สร้างชื่อไฟล์ PDF
        $filename = 'ใบเสนอราคา.pdf';

        // ส่ง HTTP response กลับไปยัง browser พร้อมกับไฟล์ PDF
        return $dompdf->stream($filename);
    }

    public function partlistPdf()
    {
        // สร้าง Object Dompdf
        $dompdf = new Dompdf();

        // โหลด HTML ที่ต้องการแปลงเป็น PDF
        $html = view('pdf_partlist')->render();

        // โหลด HTML ลงใน Dompdf
        $dompdf->loadHtml($html);

        // ตั้งค่าขนาดเอกสารและแบบกระดาษ
        $dompdf->setPaper('A4', 'portrait');

        // Render PDF
        $dompdf->render();

        // สร้างชื่อไฟล์ PDF
        $filename = 'ใบสั่งซ่อม.pdf';

        // ส่ง HTTP response กลับไปยัง browser พร้อมกับไฟล์ PDF
        return $dompdf->stream($filename);
    }

    public function receiptPdf()
    {
        // สร้าง Object Dompdf
        $dompdf = new Dompdf();

        // โหลด HTML ที่ต้องการแปลงเป็น PDF
        $html = view('pdf_receipt')->render();

        // โหลด HTML ลงใน Dompdf
        $dompdf->loadHtml($html);

        // ตั้งค่าขนาดเอกสารและแบบกระดาษ
        $dompdf->setPaper('A4', 'portrait');

        // Render PDF
        $dompdf->render();

        // สร้างชื่อไฟล์ PDF
        $filename = 'ใบเสร็จ.pdf';

        // ส่ง HTTP response กลับไปยัง browser พร้อมกับไฟล์ PDF
        return $dompdf->stream($filename);
    }
}

