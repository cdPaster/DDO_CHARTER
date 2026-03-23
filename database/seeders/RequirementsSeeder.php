<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Requirement;
use App\Models\Charter;
use App\Models\Office;

class RequirementsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // First, ensure we have an office to associate with the charter
        $office = Office::firstOrCreate(
            ['name' => 'Office of the Provincial Governor'],
            ['description' => 'Provincial Government of Davao de Oro']
        );

        // Create or get the charter
        $charter = Charter::firstOrCreate(
            ['title' => 'Provincial Government of Davao de Oro Citizens Charter 2025 (1st Edition)'],
            [
                'office_id' => $office->id,
                'description' => 'Comprehensive charter outlining public services and requirements',
                'version' => '1st Edition',
            ]
        );

        // Provincial Accountant's Office Requirements
        $this->createRequirementsForService($charter, [
            [
                'description' => 'Request Form',
                'where_to_secure' => 'Provincial Accountant\'s Office',
                'is_other' => false,
            ],
            [
                'description' => 'Report of Checks Issued',
                'where_to_secure' => 'Provincial Accountant\'s Office',
                'is_other' => false,
            ],
            [
                'description' => 'Report of Collections and Deposits',
                'where_to_secure' => 'Provincial Accountant\'s Office',
                'is_other' => false,
            ],
            [
                'description' => 'Liquidation Reports',
                'where_to_secure' => 'Provincial Accountant\'s Office',
                'is_other' => false,
            ],
            [
                'description' => 'Any valid ID',
                'where_to_secure' => 'Bring personally from applicant',
                'is_other' => false,
            ],
        ]);

        // Provincial Agriculturist Office - Agribusiness Plan Requirements
        $this->createRequirementsForService($charter, [
            [
                'description' => 'Request Letter (1 original/photocopy)',
                'where_to_secure' => 'Prepare by applicant',
                'is_other' => false,
            ],
            [
                'description' => 'Authorization letter and valid Government issued ID',
                'where_to_secure' => 'Bring personally from applicant',
                'is_other' => false,
            ],
        ]);

        // Farm Agricultural Inputs Requirements
        $this->createRequirementsForService($charter, [
            [
                'description' => 'Letter Request for individual or Resolution for cooperative/association duly approved by the LCE',
                'where_to_secure' => 'Prepare by applicant with LCE approval',
                'is_other' => false,
            ],
            [
                'description' => 'Complete farm or residence address with farm/fishpond size and contact number',
                'where_to_secure' => 'Provide by applicant',
                'is_other' => false,
            ],
            [
                'description' => 'Presence of requesting party during inspection and validation',
                'where_to_secure' => 'Applicant must be present',
                'is_other' => false,
            ],
            [
                'description' => 'Presence of requesting party during orientation and release of farm inputs',
                'where_to_secure' => 'Applicant must be present',
                'is_other' => false,
            ],
        ]);

        // Facilitation of Training/Seminars Requirements
        $this->createRequirementsForService($charter, [
            [
                'description' => 'Request Letter (1 original/photocopy)',
                'where_to_secure' => 'Prepare by applicant',
                'is_other' => false,
            ],
            [
                'description' => 'Barangay Endorsement (1 original)',
                'where_to_secure' => 'Barangay Hall',
                'is_other' => false,
            ],
            [
                'description' => 'Authorization letter and valid Government issued ID',
                'where_to_secure' => 'Bring personally from applicant',
                'is_other' => false,
            ],
        ]);

        // Farm Machinery and Equipment Rental Requirements
        $this->createRequirementsForService($charter, [
            [
                'description' => 'Request Form (1 original)',
                'where_to_secure' => 'Provincial Agriculturist Office Front Desk',
                'is_other' => false,
            ],
            [
                'description' => 'Letter of request with complete address and contact number for individual farmers',
                'where_to_secure' => 'Prepare by applicant',
                'is_other' => false,
            ],
            [
                'description' => 'Resolution with complete address and contact number for cooperatives/associations',
                'where_to_secure' => 'Prepare by applicant organization',
                'is_other' => false,
            ],
            [
                'description' => 'Presence of requesting party during site validation',
                'where_to_secure' => 'Applicant must be present',
                'is_other' => false,
            ],
            [
                'description' => 'Presence of requesting party during equipment operation',
                'where_to_secure' => 'Applicant must be present',
                'is_other' => false,
            ],
            [
                'description' => 'Proof of ownership/photocopy of Land Title or Tax Declaration (with no encumbrances)',
                'where_to_secure' => 'Land Registry or Assessor\'s Office',
                'is_other' => false,
            ],
        ]);

        // Cooperative Development Requirements
        $this->createRequirementsForService($charter, [
            [
                'description' => 'Endorsement Letter (1 original)',
                'where_to_secure' => 'Requisitioning Party/Organization',
                'is_other' => false,
            ],
            [
                'description' => 'Authorization letter and valid Government issued ID',
                'where_to_secure' => 'Bring personally from applicant',
                'is_other' => false,
            ],
        ]);

        // Provincial Administrator's Office - Administrative Support Requirements
        $this->createRequirementsForService($charter, [
            [
                'description' => 'Request Letter or Memorandum (1 original/photocopy)',
                'where_to_secure' => 'Prepare by applicant',
                'is_other' => false,
            ],
            [
                'description' => 'Official ID or authorization from requesting office',
                'where_to_secure' => 'Bring personally from applicant',
                'is_other' => false,
            ],
        ]);

        // Investment and Business Development Requirements
        $this->createRequirementsForService($charter, [
            [
                'description' => 'Business Registration Documents (DTI Certificate or SEC Certificate)',
                'where_to_secure' => 'Department of Trade and Industry',
                'is_other' => false,
            ],
            [
                'description' => 'BIR Certificate of Registration',
                'where_to_secure' => 'Bureau of Internal Revenue',
                'is_other' => false,
            ],
            [
                'description' => 'Updated Business Financial Statements (last 2 years)',
                'where_to_secure' => 'Company records or CPA',
                'is_other' => false,
            ],
            [
                'description' => 'Project Proposal and Feasibility Study',
                'where_to_secure' => 'Prepare by applicant or accredited consultant',
                'is_other' => false,
            ],
            [
                'description' => 'Proof of Land Ownership or Lease Agreement',
                'where_to_secure' => 'Land Registry or Lessor',
                'is_other' => false,
            ],
            [
                'description' => 'Environmental Compliance Certificate (ECC) or Exemption Certificate',
                'where_to_secure' => 'DENR Environmental Management Bureau',
                'is_other' => false,
            ],
        ]);

        // Housing and Homesite Development Requirements
        $this->createRequirementsForService($charter, [
            [
                'description' => 'Request Letter (1 original/photocopy)',
                'where_to_secure' => 'Prepare by applicant',
                'is_other' => false,
            ],
            [
                'description' => 'Proof of electrification or electricity consumption documents',
                'where_to_secure' => 'Electric utility company or village records',
                'is_other' => false,
            ],
            [
                'description' => 'Valid ID and proof of residency',
                'where_to_secure' => 'Bring personally from applicant',
                'is_other' => false,
            ],
        ]);

        // Provincial Assessor's Office - Assessment Records Management Requirements
        $this->createRequirementsForService($charter, [
            [
                'description' => 'Request Letter or Application Form (1 original/photocopy)',
                'where_to_secure' => 'Prepare by applicant',
                'is_other' => false,
            ],
            [
                'description' => 'Tax Declaration or other proof of ownership',
                'where_to_secure' => 'Assessor\'s Office or Land Registry',
                'is_other' => false,
            ],
            [
                'description' => 'Valid ID',
                'where_to_secure' => 'Bring personally from applicant',
                'is_other' => false,
            ],
        ]);

        // Provincial Disaster Risk Reduction and Management Office Requirements
        $this->createRequirementsForService($charter, [
            [
                'description' => 'Request Letter or Training Attendance Form',
                'where_to_secure' => 'Prepare by applicant/Barangay Hall',
                'is_other' => false,
            ],
            [
                'description' => 'List of participants with complete names and addresses',
                'where_to_secure' => 'Prepare by requesting organization',
                'is_other' => false,
            ],
            [
                'description' => 'Valid ID for authorized representative',
                'where_to_secure' => 'Bring personally from applicant',
                'is_other' => false,
            ],
        ]);

        // Provincial Health Office - Medical Certificate Requirements
        $this->createRequirementsForService($charter, [
            [
                'description' => 'Request Form for Medical Certificate',
                'where_to_secure' => 'Provincial Health Office - Records Unit',
                'is_other' => false,
            ],
            [
                'description' => 'Original Laboratory Results',
                'where_to_secure' => 'Accredited Hospital or Clinical Laboratory',
                'is_other' => false,
            ],
            [
                'description' => 'Drug Test Result (Original) - For employment and school',
                'where_to_secure' => 'PDEA accredited laboratory',
                'is_other' => false,
            ],
            [
                'description' => 'Chest X-ray (Original) - For employment and school',
                'where_to_secure' => 'Accredited Hospital/Clinic with X-ray facilities',
                'is_other' => false,
            ],
            [
                'description' => 'Official Receipt of payment',
                'where_to_secure' => 'Provincial Health Office - Finance Unit',
                'is_other' => false,
            ],
            [
                'description' => 'At least 1 Valid ID (National ID, Voter\'s ID, Driver\'s License, PRC ID)',
                'where_to_secure' => 'Bring personally from applicant',
                'is_other' => false,
            ],
        ]);

        // Provincial Hospital Services - Out-Patient Consultation Requirements
        $this->createRequirementsForService($charter, [
            [
                'description' => 'Valid Government issued ID or any acceptable identification',
                'where_to_secure' => 'Bring personally from patient',
                'is_other' => false,
            ],
            [
                'description' => 'Health Insurance Card (Philhealth or other)',
                'where_to_secure' => 'Bring personally from patient',
                'is_other' => false,
            ],
            [
                'description' => 'Medical referral (if referred from another facility)',
                'where_to_secure' => 'Previous hospital or clinic',
                'is_other' => false,
            ],
        ]);

        // Provincial Hospital Services - Emergency Room Admission Requirements
        $this->createRequirementsForService($charter, [
            [
                'description' => 'Valid ID or proof of identity',
                'where_to_secure' => 'Bring personally from patient/guardian',
                'is_other' => false,
            ],
            [
                'description' => 'Guardian or emergency contact information',
                'where_to_secure' => 'Provide by patient/family member',
                'is_other' => false,
            ],
            [
                'description' => 'Health Insurance information (if available)',
                'where_to_secure' => 'Bring personally from patient',
                'is_other' => false,
            ],
        ]);

        // Provincial Hospital Services - Laboratory Services Requirements
        $this->createRequirementsForService($charter, [
            [
                'description' => 'Medical Doctor\'s Test Order/Prescription',
                'where_to_secure' => 'From the attending physician',
                'is_other' => false,
            ],
            [
                'description' => 'Patient ID or Hospital ID number',
                'where_to_secure' => 'From hospital registration',
                'is_other' => false,
            ],
            [
                'description' => 'Valid ID',
                'where_to_secure' => 'Bring personally from patient',
                'is_other' => false,
            ],
        ]);

        // Provincial Hospital Services - Medical Certificate Issuance Requirements
        $this->createRequirementsForService($charter, [
            [
                'description' => 'Completed Medical Certificate Request Form',
                'where_to_secure' => 'Provincial Hospital Records Unit',
                'is_other' => false,
            ],
            [
                'description' => 'Proof of confinement (Hospital ID or discharge papers)',
                'where_to_secure' => 'Hospital records',
                'is_other' => false,
            ],
            [
                'description' => 'Valid ID of requesting patient or authorized representative',
                'where_to_secure' => 'Bring personally from applicant',
                'is_other' => false,
            ],
            [
                'description' => 'Payment receipt if there are applicable fees',
                'where_to_secure' => 'Hospital Cashier',
                'is_other' => false,
            ],
        ]);

        // Bureau of Corrections/Rehabilitation Services Requirements
        $this->createRequirementsForService($charter, [
            [
                'description' => 'Conjugal Visit Request Form',
                'where_to_secure' => 'Provincial Bureau of Corrections/Rehabilitation Center',
                'is_other' => false,
            ],
            [
                'description' => 'Proof of relationship (Marriage Certificate or Birth Certificate)',
                'where_to_secure' => 'Civil Registrar\'s Office or Philippine Statistics Authority',
                'is_other' => false,
            ],
            [
                'description' => 'Valid ID of the visitor',
                'where_to_secure' => 'Bring personally from visitor',
                'is_other' => false,
            ],
            [
                'description' => 'Inmate ID number or name of detainee',
                'where_to_secure' => 'Provided by facility upon inquiry',
                'is_other' => false,
            ],
            [
                'description' => 'Barangay Clearance',
                'where_to_secure' => 'Barangay Hall',
                'is_other' => false,
            ],
        ]);

        // Tourism Development Services Requirements
        $this->createRequirementsForService($charter, [
            [
                'description' => 'Tourism Site Inspection Request Form',
                'where_to_secure' => 'Provincial Tourism Development Office',
                'is_other' => false,
            ],
            [
                'description' => 'Valid ID of the applicant/requestor',
                'where_to_secure' => 'Bring personally from applicant',
                'is_other' => false,
            ],
            [
                'description' => 'Contact information (address, phone number, email)',
                'where_to_secure' => 'Provide by applicant',
                'is_other' => false,
            ],
            [
                'description' => 'Location Map and Site Plan of tourism establishment',
                'where_to_secure' => 'Prepare by applicant',
                'is_other' => false,
            ],
            [
                'description' => 'Proof of land ownership or lease agreement',
                'where_to_secure' => 'Land Registry or Lessor',
                'is_other' => false,
            ],
            [
                'description' => 'Environmental Compliance Certificate (ECC)',
                'where_to_secure' => 'DENR Environmental Management Bureau',
                'is_other' => false,
            ],
        ]);

        // General/Common Requirements (Optional/Other)
        $this->createRequirementsForService($charter, [
            [
                'description' => 'Birth Certificate (Certified True Copy)',
                'where_to_secure' => 'Philippine Statistics Authority',
                'is_other' => true,
            ],
            [
                'description' => 'Marriage Certificate (Certified True Copy)',
                'where_to_secure' => 'Philippine Statistics Authority',
                'is_other' => true,
            ],
            [
                'description' => 'Death Certificate (Certified True Copy)',
                'where_to_secure' => 'Philippine Statistics Authority',
                'is_other' => true,
            ],
            [
                'description' => 'Tax Declaration (Certified True Copy)',
                'where_to_secure' => 'Assessor\'s Office',
                'is_other' => true,
            ],
            [
                'description' => 'Barangay Clearance Certificate',
                'where_to_secure' => 'Barangay Hall',
                'is_other' => true,
            ],
            [
                'description' => 'Deed of Donation or Transfer Documents',
                'where_to_secure' => 'Notary Public',
                'is_other' => true,
            ],
            [
                'description' => 'Affidavit of Undertaking',
                'where_to_secure' => 'Notary Public or Barangay Captain',
                'is_other' => true,
            ],
            [
                'description' => 'Land Title or Cadastral Map',
                'where_to_secure' => 'Land Registry or Surveyor',
                'is_other' => true,
            ],
            [
                'description' => 'Special Power of Attorney (for legal representation)',
                'where_to_secure' => 'Notary Public',
                'is_other' => true,
            ],
            [
                'description' => 'Barangay Certification (No Conflict Certificate)',
                'where_to_secure' => 'Barangay Hall',
                'is_other' => true,
            ],
        ]);
    }

    /**
     * Helper method to create requirements for a service
     */
    private function createRequirementsForService($charter, $requirements)
    {
        foreach ($requirements as $req) {
            Requirement::firstOrCreate(
                [
                    'charter_id' => $charter->id,
                    'description' => $req['description'],
                ],
                [
                    'where_to_secure' => $req['where_to_secure'],
                    'is_other' => $req['is_other'],
                ]
            );
        }
    }
}