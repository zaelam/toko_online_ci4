<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var string[]
	 */
	public $ruleSets = [
		Rules::class,
		FormatRules::class,
		FileRules::class,
		CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array<string, string>
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------
	public $register = [
		'username' => [
			'rules' => 'required|min_length[5]',
		],
		'password' => [
			'rules' => 'required',
		],
		'repeatPassword' => [
			'rules' => 'required|matches[password]',
		],
	];

	public $register_errors = [
		'username' => [
			'required' => '{field} Harus Diisi',
			'min_length' => '{field} Minimal 5 karakter',
		],
		'password' => [
			'required' => '{field} Harus Diisi',
		],
		'repeatPassword' => [
			'required' => '{field} Harus Diisi',
			'matches' => '{field} tidak sesuai dengan password',
		],
	];

	public $login = [
		'username' => [
			'rules' => 'required|min_length[5]',
		],
		'password' => [
			'rules' => 'required',
		],
	];

	public $login_errors = [
		'username' => [
			'required' => '{field} Harus Diisi',
			'min_length' => '{field} Minimal 5 karakter',
		],
		'password' => [
			'required' => '{field} Harus Diisi',
		],
	];

	public $barang = [
		'nama' => [
			'rules' => 'required|min_length[3]',
		],
		'harga' => [
			'rules' => 'required|is_natural',
		],
		'stok' => [
			'rules' => 'required|is_natural',
		],
		'gambar' => [
			'rules' => 'uploaded[gambar]',
		],
	];

	public $transaksi = [
		'id_barang' => [
			'rules' => 'required',
		],
		'id_pembeli' => [
			'rules' => 'required',
		],
		'jumlah' => [
			'rules' => 'required',
		],
		'total_harga' => [
			'rules' => 'required',
		],
		'alamat' => [
			'rules' => 'required',
		],
		'ongkir' => [
			'rules' => 'required',
		],
	];

	public $barang_errors = [
		'nama' => [
			'required' => '{field} Harus Diisi',
			'min_length' => '{field} Minimal 3 karakter',
		],
		'harga' => [
			'required' => '{field} Harus Diisi',
			'is_natural' => '{field} tidak boleh negatif',
		],
		'stok' => [
			'required' => '{field} Harus Diisi',
			'is_natural' => '{field} tidak boleh negatif',
		],
		'gambar' => [
			'uploaded' => '{field} Harus di upload',
		],
		
	];

	public $barangupdate = [
		'nama' => [
			'rules' => 'required|min_length[3]',
		],
		'harga' => [
			'rules' => 'required|is_natural',
		],
		'stok' => [
			'rules' => 'required|is_natural',
		],
	];

	public $barangupdate_errors = [
		'nama' => [
			'required' => '{field} Harus Diisi',
			'min_length' => '{field} Minimal 3 karakter',
		],
		'harga' => [
			'required' => '{field} Harus Diisi',
			'is_natural' => '{field} tidak boleh negatif',
		],
		'stok' => [
			'required' => '{field} Harus Diisi',
			'is_natural' => '{field} tidak boleh negatif',
		],
	];

	public $komentar = [
		'komentar' => [
			'rules' => 'required',
		],
	];
}
