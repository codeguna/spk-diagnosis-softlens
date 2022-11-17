<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Diagnosis;
use App\Models\Disease;
use App\Models\Question;
use Illuminate\Http\Request;

/**
 * Class DiagnosisController
 * @package App\Http\Controllers
 */
class DiagnosisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $diagnoses = Diagnosis::paginate();

        return view('diagnosis.index', compact('diagnoses'))
            ->with('i', (request()->input('page', 1) - 1) * $diagnoses->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $questions = Question::all();
        $diseases = Disease::orderBy('diseases_code', 'ASC')->pluck('name', 'diseases_code');
        return view('diagnosis.create', compact('questions', 'diseases'))->with('i');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $G001 = $request->G001;
        $G002 = $request->G002;
        $G003 = $request->G003;
        $G004 = $request->G004;
        $G005 = $request->G005;
        $G006 = $request->G006;
        $G007 = $request->G007;
        $G008 = $request->G008;
        $G009 = $request->G009;
        $G010 = $request->G010;
        $G011 = $request->G011;
        $G012 = $request->G012;
        $G013 = $request->G013;
        $G014 = $request->G014;
        $G015 = $request->G015;
        $G016 = $request->G016;
        $G017 = $request->G017;
        $G018 = $request->G018;
        $G019 = $request->G019;
        $G020 = $request->G020;
        $G021 = $request->G021;

        if ($G001 == 1 && $G002 == 1 && $G003 == 1) {
            $hasil = "Noda Kornea";
            $saran = "Memberikan kompres dingin ke mata, tetapi jangan sampai mata terkena air.";
        } elseif ($G003 == 1 && $G004 == 1 && $G006  == 1 && $G007 == 1 && $G008 == 1 && $G009 == 1) {
            $hasil = "Blepharitis";
            $saran = "Selalu jaga kebersihan tangan untuk menghindari infeksi bakteri dan jangan menggaruk mata dengan tangan yang kotor.";
        } elseif ($G004 == 1 && $G005 == 1 && $G021  == 1) {
            $hasil = "Reaksi Alergi";
            $saran = "Gunakan obat tetes mata yang dapat digunakan untuk mengurangi rasa gatal serta reaksi alergi yang timbul pada mata.";
        } elseif ($G010 == 1 && $G011 == 1 && $G012  == 1) {
            $hasil = "Sindrom Mata Kering";
            $saran = "Obat pelumas mata (air mata buatan), untuk melembapkan mata dan menggantikan fungsi air mata, jika mata kering masih tergolong ringan dan terjadi sesekali.";
        } elseif ($G001 == 1 && $G002 == 1 && $G003  == 1 && $G008  == 1 && $G013  == 1 && $G014  == 1 && $G021  == 1) {
            $hasil = "Corneal Edema";
            $saran = "Jika edema kornea ringan, pengobatan mungkin tidak diberikan. Untuk meredakan pembengkakan sementara di mata, dokter mungkin merekomendasikan tetes salep (garam dan air) pekat.";
        } elseif ($G003 == 1 && $G009 == 1 && $G012  == 1 && $G013  == 1 && $G021  == 1) {
            $hasil = "Infeksi mata";
            $saran = "Dapat diobati dengan antibiotik, baik dalam bentuk tetes mata maupun salep mata. Biasanya akan sembuh dengan sendirinya setelah beberapa hari.";
        } elseif ($G002 == 1 && $G013 == 1 && $G016  == 1 && $G021  == 1) {
            $hasil = "Infitrates";
            $saran = "Jaga kebersihan area mata. Tidak mengucek mata, sering melakukan cuci tangan bersih dengan sabun, membersihkan make up di area mata, dan mengurangi makanan yang mengandung alergi.";
        } elseif ($G002 == 1 && $G002 == 1 && $G012  == 1 && $G015  == 1 && $G017  == 1 && $G018  == 1 && $G021  == 1) {
            $hasil = "Macrobila Keratitis";
            $saran = "Keratitis bisa dicegah dengan menjaga kebersihan dan kesehatan mata, serta mencegah cedera pada mata. Salah satu upaya yang dapat dilakukan adalah dengan menggunakan dan merawat lensa kontak dengan benar";
        } elseif ($G008 == 1 && $G015 == 1) {
            $hasil = "Vaskularisasi Kornea";
            $saran = "Pemberian antibiotik jika penyebab adalah infeksi bakteri dan antivirus jika infeksi virus. Bila kerusakan luas atau menyebabkan gangguan fungsi, maka dapat dipertimbangkan tindakan operasi berupa transplantasi kornea.";
        } elseif ($G004 == 1 && $G005 == 1 && $G015 == 1 && $G019 == 1 && $G020 == 1) {
            $hasil = "Giant Papilary Conjunctivitas";
            $saran = "Pastikan Anda tidak mengucek mata terlebih bila belum cuci tangan, hindari menggunakan obat mata tanpa melakukan pemeriksaan ke dokter, konsumsi makann bergizi, jaga keberishan diri dan lingkungan dan pastikan sirkulasi udara di rumah Anda bersih.";
        } else {
            $hasil = "Tidak Diketahui/Anda baik-baik saja";
            $saran = "Tidak ada";
        }

        $diagnosis = Diagnosis::create([
            'user_id'           => $request->user_id,
            'nama_pasien'       => $request->nama_pasien,
            'jenis_kelamin'     => $request->jenis_kelamin,
            'alamat'            => $request->alamat,
            'tanggal'           => $request->tanggal,
            'hasil'             => $hasil,
            'saran'             => $saran
        ]);

        $answer = new Answer();
        $answer->id_diagnosis   = $diagnosis["id"];
        $answer->g001           = $G001;
        $answer->g002           = $G002;
        $answer->g003           = $G003;
        $answer->g004           = $G004;
        $answer->g005           = $G005;
        $answer->g006           = $G006;
        $answer->g007           = $G007;
        $answer->g008           = $G008;
        $answer->g009           = $G009;
        $answer->g010           = $G010;
        $answer->g011           = $G011;
        $answer->g012           = $G012;
        $answer->g013           = $G013;
        $answer->g014           = $G014;
        $answer->g015           = $G015;
        $answer->g016           = $G016;
        $answer->g017           = $G017;
        $answer->g018           = $G018;
        $answer->g019           = $G019;
        $answer->g020           = $G020;
        $answer->g021           = $G021;
        $answer->save();

        return redirect()->route('admin.diagnoses.index')
            ->with('success', 'Diagnosis Berhasil !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $diagnosis = Diagnosis::find($id);

        return view('diagnosis.show', compact('diagnosis'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $diagnosis = Diagnosis::find($id);

        return view('diagnosis.edit', compact('diagnosis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Diagnosis $diagnosis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Diagnosis $diagnosis)
    {
        request()->validate(Diagnosis::$rules);

        $diagnosis->update($request->all());

        return redirect()->route('admin.diagnoses.index')
            ->with('success', 'Diagnosis updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $diagnosis = Diagnosis::find($id)->delete();

        return redirect()->route('admin.diagnoses.index')
            ->with('success', 'Diagnosis deleted successfully');
    }
}
