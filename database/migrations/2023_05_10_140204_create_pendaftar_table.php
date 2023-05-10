use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftarTable extends Migration
{
    public function up()
    {
        Schema::create('pendaftar', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('no_telp');
            $table->unsignedBigInteger('jabatan');
            $table->string('email')->unique();
            $table->string('password');
            $table->text('alamat');
            $table->string('jenis_kelamin');
            $table->string('ktp');
            $table->string('ktm');
            $table->string('s_pernyataan');
            $table->date('tanggal_lahir');
            $table->timestamps();

            $table->foreign('jabatan')->references('id')->on('datalowongan')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pendaftar');
    }
}
