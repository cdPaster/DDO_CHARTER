<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Office;
use App\Models\Service;

class   RequirementsSeeder extends Seeder
{
    public function run(): void
    {
        // ============================================
        // 1. PROVINCIAL ACCOUNTANT'S OFFICE
        // ============================================
        $office = Office::create([
            'name'         => "Provincial Accountant's Office",
            'abbreviation' => 'PACCO',
            'description'  => 'Handles financial records and remittance certifications for PLGU employees.',
        ]);

        $office->services()->create([
            'service_name'        => 'Certification of Premium and Loan Repayment (Employed from 2006 and Onwards)',
            'service_description' => 'Issuance of certification as proof of remittance of deducted premiums and loans from employee salaries to GOCCs.',
            'service_type'        => 'G2C',
            'classification'      => 'Simple',
            'who_may_avail'       => 'All current, resigned and retired employees of the PLGU',
        ])->requirements()->createMany([
            ['description' => 'Request Form',                    'where_to_secure' => "Provincial Accountant's Office",   'is_other' => false],
            ['description' => 'Report of Checks Issued',         'where_to_secure' => 'Provincial Treasurer\'s Office',   'is_other' => false],
            ['description' => 'Report of Collections and Deposits', 'where_to_secure' => 'Provincial Treasurer\'s Office','is_other' => false],
            ['description' => 'Liquidation Reports',             'where_to_secure' => 'Provincial Treasurer\'s Office',   'is_other' => false],
        ]);

        $office->services()->create([
            'service_name'        => 'Certification of Premium and Loan Repayment (Employed Before 2006)',
            'service_description' => 'Issuance of certification as proof of remittance for employees hired before 2006.',
            'service_type'        => 'G2C',
            'classification'      => 'Simple',
            'who_may_avail'       => 'All current, resigned and retired employees of the Province',
        ])->requirements()->createMany([
            ['description' => 'Any valid ID', 'where_to_secure' => 'Bring personally from employee', 'is_other' => false],
        ]);

        // ============================================
        // 2. PROVINCIAL AGRICULTURIST OFFICE
        // ============================================
        $office = Office::create([
            'name'         => 'Provincial Agriculturist Office',
            'abbreviation' => 'PAGRO',
            'description'  => 'Delivers agricultural services, technical assistance, and farm support to farmers and cooperatives.',
        ]);

        $office->services()->create([
            'service_name'        => 'Preparation of Agribusiness Plan',
            'service_description' => 'Ensures all data needed is reflected in the business plan and properly detailed for financing institutions.',
            'service_type'        => 'G2C',
            'classification'      => 'Highly Technical',
            'who_may_avail'       => 'Farmers, Farmer Cooperatives and Associations',
        ])->requirements()->createMany([
            ['description' => 'Request Letter (1 original/photocopy)',               'where_to_secure' => 'Farmers, Associations, Cooperatives', 'is_other' => false],
            ['description' => 'Authorization letter and valid Government issued ID', 'where_to_secure' => 'Bring personally from applicant',     'is_other' => false],
        ]);

        $office->services()->create([
            'service_name'        => 'Facilitation of Agriculture and Fishery Situationer and Commodity Profile',
            'service_description' => 'Provision of concise and complete data in agriculture, fisheries and cooperative profiles updated yearly.',
            'service_type'        => 'G2C',
            'classification'      => 'Simple',
            'who_may_avail'       => 'Farmers, Farmer Cooperatives, Associations, NGOs',
        ])->requirements()->createMany([
            ['description' => 'Request Letter (1 original/photocopy)',               'where_to_secure' => 'Farmers, Associations, Cooperatives, NGOs', 'is_other' => false],
            ['description' => 'Authorization letter and valid Government issued ID', 'where_to_secure' => 'Bring personally from applicant',           'is_other' => false],
        ]);

        $office->services()->create([
            'service_name'        => 'Provision of Agricultural Inputs',
            'service_description' => 'Provision of seeds, fingerlings, seedlings and organic fertilizer to qualified farmers and cooperatives.',
            'service_type'        => 'G2C',
            'classification'      => 'Highly Technical',
            'who_may_avail'       => 'Individual requestors, Farmers/Fisherfolk, Registered Associations/Cooperatives, Government and non-government agencies',
        ])->requirements()->createMany([
            ['description' => 'Letter Request (for individual) or Resolution (for cooperative/association/Barangay/Municipal) duly approved by the LCE with complete farm or residence address, farm/fishpond size and contact number', 'where_to_secure' => 'Individual requestor, Farmer/Fisherfolk, Government and non-government agency', 'is_other' => false],
            ['description' => 'Presence of requesting party during inspection and validation of farm/fishpond readiness',      'where_to_secure' => 'Registered Associations, Cooperatives and other government agency',                    'is_other' => false],
            ['description' => 'Presence of requesting party during orientation and release of farm inputs or fingerlings',     'where_to_secure' => 'Individual requestor, Farmer, Fisherfolk, associations or cooperative representatives', 'is_other' => false],
            ['description' => 'List of beneficiaries (if cooperative/association)',                                            'where_to_secure' => 'Cooperative/Association',                                                            'is_other' => false],
            ['description' => 'Authorization letter from landowner (if tenant)',                                               'where_to_secure' => 'Landowner',                                                                          'is_other' => false],
        ]);

        $office->services()->create([
            'service_name'        => 'Facilitation of Training/Seminars on Package of Technology (POT), Farmers Field School (FFS), Aquaculture, Food and Processing, Fishery Law Orientation and Seed Orientation',
            'service_description' => 'Provides one-stop source of information on extension, training and technical assistance on fishery and agri-based technology.',
            'service_type'        => 'G2C',
            'classification'      => 'Highly Technical',
            'who_may_avail'       => 'Individual farmers, Farmer Cooperatives and Associations',
        ])->requirements()->createMany([
            ['description' => 'Request Letter (1 original)',                         'where_to_secure' => 'Farmer groups, associations, and cooperatives', 'is_other' => false],
            ['description' => 'Barangay Endorsement (1 original)',                   'where_to_secure' => 'Barangay Hall',                                  'is_other' => false],
            ['description' => 'Authorization letter and valid Government issued ID', 'where_to_secure' => 'Bring personally from applicant',               'is_other' => false],
        ]);

        $office->services()->create([
            'service_name'        => 'Facilitation of Farm Machineries and Equipment Rental',
            'service_description' => 'Facilitation of access to farm machinery and equipment rental services for individual farmers and cooperatives.',
            'service_type'        => 'G2C',
            'classification'      => 'Highly Technical',
            'who_may_avail'       => 'Individual farmers, Farmer Cooperatives and Associations',
        ])->requirements()->createMany([
            ['description' => 'Request Form (1 original)',                                                                     'where_to_secure' => 'PAGRO Front Desk',                         'is_other' => false],
            ['description' => 'Letter of request with complete address and contact number (for individual farmers)',           'where_to_secure' => 'Prepare by applicant (Farmer)',            'is_other' => false],
            ['description' => 'Resolution with complete address and contact number (for cooperatives/associations)',           'where_to_secure' => 'Prepare by applicant organization',        'is_other' => false],
            ['description' => 'Presence of requesting party during site validation',                                           'where_to_secure' => 'Applicant must be present',                'is_other' => false],
            ['description' => 'Presence of requesting party during equipment operation',                                       'where_to_secure' => 'Applicant must be present',                'is_other' => false],
            ['description' => 'Proof of ownership/photocopy of Land Title or Tax Declaration (with no encumbrances)',         'where_to_secure' => 'Land Registry or Assessor\'s Office',     'is_other' => false],
        ]);

        $office->services()->create([
            'service_name'        => 'Facilitation in the Conduct of Immersion of On-The-Job Training for Senior High Schools & College Agriculture Students',
            'service_description' => 'Coordination of internship and on-the-job training programs for senior high school and college agriculture students.',
            'service_type'        => 'G2G',
            'classification'      => 'Simple',
            'who_may_avail'       => 'Senior High School and College Agriculture Students',
        ])->requirements()->createMany([
            ['description' => 'Endorsement Letter (1 original)',                      'where_to_secure' => 'Requisitioning Party (School)', 'is_other' => false],
            ['description' => 'Authorization letter and valid Government issued ID',  'where_to_secure' => 'Bring personally from applicant', 'is_other' => false],
        ]);

        $office->services()->create([
            'service_name'        => 'Facilitation of Pre-Membership and Education Seminar, Loan Promotion Seminar and Cooperative Training',
            'service_description' => 'Training and seminars for cooperative members and leaders on cooperative development and management.',
            'service_type'        => 'G2C',
            'classification'      => 'Complex',
            'who_may_avail'       => 'Farmers Cooperatives, Farmer Groups and Associations',
        ])->requirements()->createMany([
            ['description' => 'Request Letter (1 original)',                          'where_to_secure' => 'Farmer Groups, Associations, Cooperatives', 'is_other' => false],
            ['description' => 'Authorization letter and valid Government issued ID',  'where_to_secure' => 'Bring personally from applicant',           'is_other' => false],
        ]);

        $office->services()->create([
            'service_name'        => 'Facilitation for the Release of Loan for Micro Credit Assistance Program to Cooperatives (MCAPC)',
            'service_description' => 'Processing and facilitation of micro-credit loans for cooperative development and business operations.',
            'service_type'        => 'G2C',
            'classification'      => 'Complex',
            'who_may_avail'       => 'Registered Cooperatives',
        ])->requirements()->createMany([
            ['description' => 'Loan Application (1 original)',              'where_to_secure' => 'Cooperatives', 'is_other' => false],
            ['description' => 'Board Resolutions/Endorsement (1 original)', 'where_to_secure' => 'Cooperatives', 'is_other' => false],
            ['description' => 'Authorization letter and valid Government issued ID', 'where_to_secure' => 'Bring personally from applicant', 'is_other' => false],
        ]);

        // ============================================
        // 3. PROVINCIAL ADMINISTRATOR'S OFFICE
        // ============================================
        $office = Office::create([
            'name'         => "Provincial Administrator's Office",
            'abbreviation' => 'PAO',
            'description'  => 'Provides administrative, investment, tourism, employment, and rehabilitation services.',
        ]);

        $office->services()->create([
            'service_name'        => 'Issuance of Copies of Administrative Orders, Executive Orders, Memorandum Orders, and Office Orders',
            'service_description' => 'Provision of certified copies of provincial administrative directives and orders.',
            'service_type'        => 'G2G',
            'classification'      => 'Simple',
            'who_may_avail'       => 'Employees of PLGU-Davao de Oro, Government Agencies, Public',
        ])->requirements()->createMany([
            ['description' => 'Accomplished Request Form', 'where_to_secure' => 'PAO-Administrative Division', 'is_other' => false],
        ]);

        $office->services()->create([
            'service_name'        => 'Provision of Duplicating Services',
            'service_description' => 'Photocopying and document reproduction services for government offices.',
            'service_type'        => 'G2G',
            'classification'      => 'Simple',
            'who_may_avail'       => 'Employees of PLGU-Davao de Oro, Other Government Offices',
        ])->requirements()->createMany([
            ['description' => 'Accomplished Request Form',                        'where_to_secure' => 'PAO-Administrative Division', 'is_other' => false],
            ['description' => 'Document for printing (1 original)',               'where_to_secure' => 'Requisitioning Office',        'is_other' => false],
            ['description' => 'Duplo Ink, Master Roll Film and Bond Paper for Printing', 'where_to_secure' => 'Requisitioning Office', 'is_other' => false],
        ]);

        $office->services()->create([
            'service_name'        => 'Provision of Stenographic Services',
            'service_description' => 'Shorthand and transcription services for official documents and meetings.',
            'service_type'        => 'G2G',
            'classification'      => 'Complex',
            'who_may_avail'       => 'Employees of PLGU-Davao de Oro',
        ])->requirements()->createMany([
            ['description' => 'Request Letter (2 original copies)', 'where_to_secure' => 'Requisitioning Office', 'is_other' => false],
        ]);

        $office->services()->create([
            'service_name'        => 'Delivery of Communication Letters',
            'service_description' => 'Courier and delivery services for official correspondences and documents.',
            'service_type'        => 'G2G',
            'classification'      => 'Simple',
            'who_may_avail'       => 'Employees of PLGU-Davao de Oro, Government Offices',
        ])->requirements()->createMany([
            ['description' => 'Request Form',         'where_to_secure' => 'PAO-CADD',                    'is_other' => false],
            ['description' => 'Communication Letter', 'where_to_secure' => 'Requisitioning Office/Party', 'is_other' => false],
        ]);

        $office->services()->create([
            'service_name'        => 'Validation of requests submitted by citizens to the Office of the Governor',
            'service_description' => 'Verification and processing of citizen requests and complaints directed to the Governor.',
            'service_type'        => 'G2C',
            'classification'      => 'Simple',
            'who_may_avail'       => 'Citizens of Davao de Oro',
        ])->requirements()->createMany([
            ['description' => 'Request Form',                                                                           'where_to_secure' => 'PAO-CADD',                    'is_other' => false],
            ['description' => 'Validation Form and list of beneficiaries with complete names and address',              'where_to_secure' => 'Requisitioning Office/Party', 'is_other' => false],
        ]);

        $office->services()->create([
            'service_name'        => 'Issuance of Certificate of Electrification/Certificate of Verification',
            'service_description' => 'Certification of electrical and utility infrastructure status for properties and barangays.',
            'service_type'        => 'G2C',
            'classification'      => 'Simple',
            'who_may_avail'       => 'Property Owners, Beneficiaries/Clients, Barangays',
        ])->requirements()->createMany([
            ['description' => 'Request Letter (1 original/photocopy)',  'where_to_secure' => 'Prepare by applicant',             'is_other' => false],
            ['description' => 'Proof of electrification or electricity consumption documents', 'where_to_secure' => 'Electric utility company or village records', 'is_other' => false],
            ['description' => 'Valid ID and proof of residency',        'where_to_secure' => 'Bring personally from applicant', 'is_other' => false],
        ]);

        $office->services()->create([
            'service_name'        => 'Application of Investment Incentives',
            'service_description' => 'Assistance in applying for provincial investment incentives and business benefits.',
            'service_type'        => 'G2B',
            'classification'      => 'Complex',
            'who_may_avail'       => 'All Businessmen, Entrepreneurs, Investors',
        ])->requirements()->createMany([
            ['description' => 'Application form accomplished and notarized by the applicant',                                          'where_to_secure' => 'PAO-Investment Division',                           'is_other' => false],
            ['description' => 'Certified true copy of primary registration (DTI, SEC, or CDA)',                                        'where_to_secure' => 'DTI, SEC, or Cooperative Development Authority',    'is_other' => false],
            ['description' => 'Latest comparative audited financial statements acknowledged by BIR and SEC (if already in operation)', 'where_to_secure' => 'Applicant/BIR',                                    'is_other' => false],
            ['description' => 'Proof of proposed place of business showing main operating facility is within the Province',            'where_to_secure' => 'Applicant',                                        'is_other' => false],
            ['description' => 'Project Study',                                                                                         'where_to_secure' => 'Applicant',                                        'is_other' => false],
            ['description' => 'Other specific permits applicable to the business (e.g. Environmental Clearance Certificate)',          'where_to_secure' => 'Applicant/DENR-EMB',                               'is_other' => false],
        ]);

        $office->services()->create([
            'service_name'        => 'Issuance of Employment Referral Letter',
            'service_description' => 'Provision of employment referral and job placement assistance services.',
            'service_type'        => 'G2C',
            'classification'      => 'Simple',
            'who_may_avail'       => 'Job Seekers, Unemployed Persons',
        ])->requirements()->createMany([
            ['description' => 'Transcript of Records or Diploma (1 copy original or photocopy for verification)', 'where_to_secure' => 'School where applicant studied', 'is_other' => false],
            ['description' => 'Application Letter (2 copies original)',                                            'where_to_secure' => 'Prepare by applicant',           'is_other' => false],
            ['description' => 'Resume or Bio-data (2 copies original)',                                            'where_to_secure' => 'Prepare by applicant',           'is_other' => false],
            ['description' => 'Valid Identification Card',                                                         'where_to_secure' => 'Bring personally from applicant','is_other' => false],
            ['description' => 'Certificate of Employment if previously employed (original copy)',                  'where_to_secure' => 'Previous employer',              'is_other' => false],
        ]);

        $office->services()->create([
            'service_name'        => 'Screening and Facilitation for Conjugal Visit',
            'service_description' => 'Processing and facilitation of conjugal visits for inmates and their families.',
            'service_type'        => 'G2C',
            'classification'      => 'Simple',
            'who_may_avail'       => 'Families of Inmates',
        ])->requirements()->createMany([
            ['description' => 'Marriage Certificate (1 original/photocopy)',     'where_to_secure' => 'Requisitioning Party / PSA', 'is_other' => false],
            ['description' => 'Barangay Certificate (for live-in partners)',     'where_to_secure' => 'Barangay Hall',              'is_other' => false],
            ['description' => 'Valid Identification Card (1 original)',          'where_to_secure' => 'Bring personally from visitor', 'is_other' => false],
        ]);

        $office->services()->create([
            'service_name'        => 'Fee-based Site Inspection, Exploration, and Validation of Tourism Establishments',
            'service_description' => 'Professional inspection and assessment of tourism establishments with technical evaluation.',
            'service_type'        => 'G2B',
            'classification'      => 'Complex',
            'who_may_avail'       => 'Tourism-related and oriented establishments, Resort Owners',
        ])->requirements()->createMany([
            ['description' => 'Request letter with Governor\'s approval note (1 original)', 'where_to_secure' => 'Requesting Party/Office',    'is_other' => false],
            ['description' => 'Land Title, Vicinity Map, Geotagged Map',                   'where_to_secure' => 'Requesting Party/Office',    'is_other' => false],
        ]);

        $office->services()->create([
            'service_name'        => 'Conduct of Tourism Manpower Development for Industry Workers, Service Frontliners and Community-based Managed Destinations',
            'service_description' => 'Training programs for tourism workers and community-based guides on hospitality and service excellence.',
            'service_type'        => 'G2C',
            'classification'      => 'Complex',
            'who_may_avail'       => 'Tourism frontliners, Community-based destination groups, People\'s Organizations',
        ])->requirements()->createMany([
            ['description' => 'Request letter with Governor\'s approval note and Training proposal/Training Needs Analysis', 'where_to_secure' => 'Requesting Party/Office', 'is_other' => false],
        ]);

        // ============================================
        // 4. PROVINCIAL ASSESSOR'S OFFICE
        // ============================================
        $office = Office::create([
            'name'         => "Provincial Assessor's Office",
            'abbreviation' => 'PAO',
            'description'  => 'Manages real property assessment, tax declarations, and property valuation services.',
        ]);

        $office->services()->create([
            'service_name'        => 'Issuance of Certificate of Landholding',
            'service_description' => 'Certification of land ownership and holdings in the province.',
            'service_type'        => 'G2C',
            'classification'      => 'Simple',
            'who_may_avail'       => 'Property Owners',
        ])->requirements()->createMany([
            ['description' => 'Request Form (1 original)',                                                                                                              'where_to_secure' => 'Provincial Assessor\'s Office', 'is_other' => false],
            ['description' => 'At least one (1) valid ID of the Property Owner (Driver\'s License, PRC, Postal ID, SSS, GSIS, Passport, UMID, National ID, Senior Citizen\'s ID)', 'where_to_secure' => 'Requesting Party', 'is_other' => false],
            ['description' => 'Special Power of Attorney - if transacting person is not the owner',                                                                    'where_to_secure' => 'Notary Public',                 'is_other' => false],
            ['description' => 'Deed of Conveyance (Sale, Donation, Extra Judicial) - if transacting person is not the owner',                                          'where_to_secure' => 'Requesting Party',              'is_other' => false],
        ]);

        $office->services()->create([
            'service_name'        => 'Issuance of Certificate of No-Landholding',
            'service_description' => 'Certification that a person has no registered landholdings in the province.',
            'service_type'        => 'G2C',
            'classification'      => 'Simple',
            'who_may_avail'       => 'All Citizens',
        ])->requirements()->createMany([
            ['description' => 'Request Form (1 original)',                                   'where_to_secure' => 'Provincial Assessor\'s Office', 'is_other' => false],
            ['description' => 'At least one (1) valid ID of the Property Owner',            'where_to_secure' => 'Requesting Party',              'is_other' => false],
        ]);

        $office->services()->create([
            'service_name'        => 'Issuance of Certified True Copy of Tax Declaration',
            'service_description' => 'Certified copies of tax declaration documents for property records.',
            'service_type'        => 'G2C',
            'classification'      => 'Simple',
            'who_may_avail'       => 'Property Owners, Concerned Parties',
        ])->requirements()->createMany([
            ['description' => 'Request Form (1 original)',                                   'where_to_secure' => 'Provincial Assessor\'s Office', 'is_other' => false],
            ['description' => 'At least one (1) valid ID of the Property Owner',            'where_to_secure' => 'Requesting Party',              'is_other' => false],
            ['description' => 'Special Power of Attorney - if transacting person is not the owner', 'where_to_secure' => 'Notary Public',         'is_other' => false],
            ['description' => 'Deed of Conveyance (Sale, Donation, Extra Judicial)',        'where_to_secure' => 'Requesting Party',              'is_other' => false],
            ['description' => 'Secretary\'s Certificate - if the requesting party is a corporation', 'where_to_secure' => 'Corporation',          'is_other' => false],
            ['description' => 'Board Resolution - if the requesting party is a cooperative', 'where_to_secure' => 'Cooperative',                  'is_other' => false],
        ]);

        $office->services()->create([
            'service_name'        => 'Subdivision of Assessment',
            'service_description' => 'Division of property assessment for subdivision and real estate purposes.',
            'service_type'        => 'G2C',
            'classification'      => 'Complex',
            'who_may_avail'       => 'Property Owners, Surveyors',
        ])->requirements()->createMany([
            ['description' => 'Request Letter',                                          'where_to_secure' => 'Property Owner',                      'is_other' => false],
            ['description' => 'Certified Copy of Title',                                 'where_to_secure' => 'Registry of Deeds / Property Owner',  'is_other' => false],
            ['description' => 'Current Tax Clearance',                                   'where_to_secure' => 'Municipal Treasurer\'s Office',        'is_other' => false],
            ['description' => 'Approved Subdivision Plan/Survey Plan/Sketch Map',        'where_to_secure' => 'Property Owner',                      'is_other' => false],
            ['description' => 'Deed of Sale/Deed of Donation for Transfer of Ownership', 'where_to_secure' => 'Requesting Party',                    'is_other' => false],
            ['description' => 'Extra Judicial Partition for subdivision',                 'where_to_secure' => 'Requesting Party',                    'is_other' => false],
        ]);

        $office->services()->create([
            'service_name'        => 'Appraisal and Assessment of New Buildings and Other Structures',
            'service_description' => 'Valuation and assessment of newly constructed buildings and structures.',
            'service_type'        => 'G2C',
            'classification'      => 'Complex',
            'who_may_avail'       => 'Property Owners, Builders',
        ])->requirements()->createMany([
            ['description' => 'Request Letter',      'where_to_secure' => 'Property Owner', 'is_other' => false],
            ['description' => 'Sworn Statement',     'where_to_secure' => 'Property Owner', 'is_other' => false],
            ['description' => 'Building Plan',       'where_to_secure' => 'Property Owner', 'is_other' => false],
            ['description' => 'Building Permit',     'where_to_secure' => 'Property Owner', 'is_other' => false],
            ['description' => 'At least one (1) valid ID (UMID, National ID, Driver\'s License, Senior Citizen ID, Passport, SSS)', 'where_to_secure' => 'Property Owner', 'is_other' => false],
        ]);

        $office->services()->create([
            'service_name'        => 'Transfer of Ownership',
            'service_description' => 'Processing of property ownership transfer and assessment updates.',
            'service_type'        => 'G2C',
            'classification'      => 'Simple',
            'who_may_avail'       => 'Property Owners',
        ])->requirements()->createMany([
            ['description' => 'Request Letter',                      'where_to_secure' => 'Property Owner',                     'is_other' => false],
            ['description' => 'Certified True Copy of Title',        'where_to_secure' => 'Registry of Deeds / Property Owner', 'is_other' => false],
            ['description' => 'Deed of Sale / Deed of Donation',     'where_to_secure' => 'Property Owner',                     'is_other' => false],
            ['description' => 'Current Tax Clearance',               'where_to_secure' => 'Municipal Treasurer\'s Office',      'is_other' => false],
            ['description' => 'At least one (1) valid ID',           'where_to_secure' => 'Property Owner',                     'is_other' => false],
        ]);

        // ============================================
        // 5. PROVINCIAL DISASTER RISK REDUCTION AND MANAGEMENT OFFICE
        // ============================================
        $office = Office::create([
            'name'         => 'Provincial Disaster Risk Reduction and Management Office',
            'abbreviation' => 'PDRRMO',
            'description'  => 'Coordinates disaster risk reduction, emergency response, and capacity building activities.',
        ]);

        $office->services()->create([
            'service_name'        => 'Provision of DRRM Technical Assistance (Trainings/Seminars/IECs and other Capacity Building Activities)',
            'service_description' => 'Training and capacity building programs on disaster risk reduction and management for LGUs, communities, and organizations.',
            'service_type'        => 'G2G',
            'classification'      => 'Complex',
            'who_may_avail'       => 'LGUs, NGAs, Communities, Organizations',
        ])->requirements()->createMany([
            ['description' => 'Approved Letter of Request addressed to the Governor thru PDRRMO specifying the training/technical assistance needed, target audience, proposed date and venue, and number of participants', 'where_to_secure' => 'Requisitioning Party', 'is_other' => false],
        ]);

        $office->services()->create([
            'service_name'        => 'Provision of Technical Assistance on Formulation of DRR-CCA related Plans',
            'service_description' => 'Technical support in developing disaster risk reduction and climate change adaptation plans.',
            'service_type'        => 'G2G',
            'classification'      => 'Complex',
            'who_may_avail'       => 'LGUs, Government Offices, Barangays',
        ])->requirements()->createMany([
            ['description' => 'Approved Request Letter (1 original)', 'where_to_secure' => 'Requisitioning Party', 'is_other' => false],
        ]);

        $office->services()->create([
            'service_name'        => 'Emergency Response Operations Services',
            'service_description' => 'Coordination and deployment of emergency response during disasters and calamities.',
            'service_type'        => 'G2C',
            'classification'      => 'Complex',
            'who_may_avail'       => 'Disaster-affected communities and individuals',
        ])->requirements()->createMany([
            ['description' => 'Report any incident via face-to-face or phone call', 'where_to_secure' => 'Requesting Party', 'is_other' => false],
        ]);

        $office->services()->create([
            'service_name'        => 'Augmentation of Search, Rescue and Retrieval Operation',
            'service_description' => 'Additional support and resources for search and rescue operations.',
            'service_type'        => 'G2G',
            'classification'      => 'Complex',
            'who_may_avail'       => 'LDRRMOs, BDRRMOs, Public and Private Agencies',
        ])->requirements()->createMany([
            ['description' => 'Report/Phone Call from Municipal LGU supported by Letter Request or filled-up ICS Form 213 Request', 'where_to_secure' => 'Requesting Party/LGU', 'is_other' => false],
        ]);

        $office->services()->create([
            'service_name'        => 'Lending of Rescue Tools and Equipment',
            'service_description' => 'Provision of rescue equipment and tools during emergency situations and disasters.',
            'service_type'        => 'G2G',
            'classification'      => 'Simple',
            'who_may_avail'       => 'LGUs, NGOs, Response Groups',
        ])->requirements()->createMany([
            ['description' => 'Report/Phone Call with Request letter (1 original, 1 photocopy)', 'where_to_secure' => 'Agency of the client', 'is_other' => false],
            ['description' => 'Valid ID (1 photocopy)',                                          'where_to_secure' => 'Client',              'is_other' => false],
        ]);

        // ============================================
        // 6. PROVINCIAL HEALTH OFFICE
        // ============================================
        $office = Office::create([
            'name'         => 'Provincial Health Office',
            'abbreviation' => 'PHO',
            'description'  => 'Delivers public health services, medical certificates, vaccinations, and health programs.',
        ]);

        $office->services()->create([
            'service_name'        => 'Issuance of Medical Certificate',
            'service_description' => 'Medical certificates for employment, travel, school, or other official purposes.',
            'service_type'        => 'G2C',
            'classification'      => 'Simple',
            'who_may_avail'       => 'All persons requiring medical certificates',
        ])->requirements()->createMany([
            ['description' => 'Laboratory Results (1 original) - for employment, travel and school',  'where_to_secure' => 'Accredited Hospital or Clinical Laboratory',        'is_other' => false],
            ['description' => 'Drug Test Result (1 original) - for employment and school',            'where_to_secure' => 'PDEA accredited laboratory',                        'is_other' => false],
            ['description' => 'Chest X-ray (1 original) - for employment and school',                 'where_to_secure' => 'Accredited Hospital/Clinic with X-ray facilities',  'is_other' => false],
            ['description' => 'Official Receipt (1 original) - for medical certificate payment',      'where_to_secure' => 'PHO Finance Unit',                                  'is_other' => false],
            ['description' => 'At least 1 Valid ID (National ID, Voter\'s ID, Driver\'s License, PRC ID or any valid ID)', 'where_to_secure' => 'PHO',                         'is_other' => false],
        ]);

        $office->services()->create([
            'service_name'        => 'Issuance of Certificate of Vaccination',
            'service_description' => 'Vaccination certificates for immunization and health records.',
            'service_type'        => 'G2C',
            'classification'      => 'Simple',
            'who_may_avail'       => 'All vaccinated individuals',
        ])->requirements()->createMany([
            ['description' => 'At least 1 Valid ID (National ID, Voter\'s ID, Driver\'s License, PRC ID or any valid ID)', 'where_to_secure' => 'PHO',               'is_other' => false],
            ['description' => 'Immunization Card',                                                                          'where_to_secure' => 'Requesting Party', 'is_other' => false],
        ]);

        $office->services()->create([
            'service_name'        => 'Provision of Vaccination Services (Walk-in)',
            'service_description' => 'On-site vaccination services for drop-in clients.',
            'service_type'        => 'G2C',
            'classification'      => 'Simple',
            'who_may_avail'       => 'All persons eligible for vaccination',
        ])->requirements()->createMany([
            ['description' => 'Vaccine Immunization Card (if available)',                   'where_to_secure' => 'Requesting Party', 'is_other' => false],
            ['description' => 'Accomplished Individual Treatment Record (ITR) Form',       'where_to_secure' => 'PHO',              'is_other' => false],
        ]);

        $office->services()->create([
            'service_name'        => 'Out-patient Medical Check-up',
            'service_description' => 'Medical consultation and health screening services.',
            'service_type'        => 'G2C',
            'classification'      => 'Simple',
            'who_may_avail'       => 'Citizens, General public',
        ])->requirements()->createMany([
            ['description' => 'Doctor\'s Clearance', 'where_to_secure' => 'PHO', 'is_other' => false],
        ]);

        $office->services()->create([
            'service_name'        => 'Request for Blood: Direct Distribution',
            'service_description' => 'Blood bank services and blood product distribution.',
            'service_type'        => 'G2C',
            'classification'      => 'Simple',
            'who_may_avail'       => 'Patients, Medical facilities',
        ])->requirements()->createMany([
            ['description' => 'Filled out Blood Order Form',              'where_to_secure' => 'Blood Distribution Management System', 'is_other' => false],
            ['description' => 'Thermochest with Cold Dogs and Thermometer', 'where_to_secure' => 'Requesting Party',                   'is_other' => false],
        ]);

        $office->services()->create([
            'service_name'        => 'Request for Human Immunodeficiency Virus Counseling & Testing (VCT)',
            'service_description' => 'HIV testing and counseling services.',
            'service_type'        => 'G2C',
            'classification'      => 'Simple',
            'who_may_avail'       => 'All persons requesting HIV testing',
        ])->requirements()->createMany([
            ['description' => 'Letter request with notation from the Governor', 'where_to_secure' => 'Requesting Party', 'is_other' => false],
        ]);

        $office->services()->create([
            'service_name'        => 'Request for Lectures on Non-Communicable Disease Program',
            'service_description' => 'Health education on chronic diseases and prevention strategies.',
            'service_type'        => 'G2C',
            'classification'      => 'Complex',
            'who_may_avail'       => 'Communities, Schools, Organizations, Workplaces',
        ])->requirements()->createMany([
            ['description' => 'Request Letter for speaker/lecturer (with Governor\'s Recommendation/Approval) (1 original)', 'where_to_secure' => 'Requesting Party', 'is_other' => false],
        ]);

        $office->services()->create([
            'service_name'        => 'Request for Special Outreach Program Services',
            'service_description' => 'Community health outreach and special health programs.',
            'service_type'        => 'G2C',
            'classification'      => 'Complex',
            'who_may_avail'       => 'Communities, Barangays, Organizations',
        ])->requirements()->createMany([
            ['description' => 'Approved Request Letter from the Governor', 'where_to_secure' => 'Requesting Party', 'is_other' => false],
        ]);

        // ============================================
        // 7. PROVINCIAL GOVERNOR'S OFFICE
        // ============================================
        $office = Office::create([
            'name'         => "Provincial Governor's Office",
            'abbreviation' => 'PGO',
            'description'  => 'Central office providing financial assistance, women development, anti-drug programs, and executive services.',
        ]);

        $office->services()->create([
            'service_name'        => 'For Hospitalization Assistance',
            'service_description' => 'Financial assistance for hospitalization and medical expenses.',
            'service_type'        => 'G2C',
            'classification'      => 'Simple',
            'who_may_avail'       => 'Hospitalized individuals, Indigent patients',
        ])->requirements()->createMany([
            ['description' => 'Barangay Certificate of Residency (original)',                                             'where_to_secure' => 'Barangay Hall',                                      'is_other' => false],
            ['description' => 'MSWD Certificate of Indigency (original)',                                                 'where_to_secure' => 'Municipal Social Welfare and Development Office',    'is_other' => false],
            ['description' => 'Medical Certificate (original certified true copy)',                                       'where_to_secure' => 'Physician/Hospital/Clinic',                          'is_other' => false],
            ['description' => 'Receipt/Resita photocopy with at least 1 valid ID (photocopy back-to-back) for non-immediate family', 'where_to_secure' => 'Requesting Party',                    'is_other' => false],
        ]);

        $office->services()->create([
            'service_name'        => 'For Hospital Bill Assistance',
            'service_description' => 'Financial aid for hospital billing and medical expenses payment.',
            'service_type'        => 'G2C',
            'classification'      => 'Simple',
            'who_may_avail'       => 'Patients, Individuals with medical bills',
        ])->requirements()->createMany([
            ['description' => 'Barangay Certificate of Residency (original)',                 'where_to_secure' => 'Barangay Hall',                                    'is_other' => false],
            ['description' => 'MSWD Certificate of Indigency (original)',                     'where_to_secure' => 'Municipal Social Welfare and Development Office',  'is_other' => false],
            ['description' => 'Medical Certificate/Medical Abstract (original certified true copy)', 'where_to_secure' => 'Physician/Hospital/Clinic',               'is_other' => false],
            ['description' => 'Promissory Note',                                              'where_to_secure' => 'Requesting Party',                                'is_other' => false],
            ['description' => 'Statement of Account/Final Bill',                              'where_to_secure' => 'Hospital/Clinic',                                 'is_other' => false],
            ['description' => 'Valid ID (Photocopy)',                                         'where_to_secure' => 'Requesting Party',                                'is_other' => false],
        ]);

        $office->services()->create([
            'service_name'        => 'For Laboratory Assistance',
            'service_description' => 'Financial assistance for laboratory examinations and tests.',
            'service_type'        => 'G2C',
            'classification'      => 'Simple',
            'who_may_avail'       => 'Individuals needing lab tests',
        ])->requirements()->createMany([
            ['description' => 'Barangay Certificate of Residency (original)', 'where_to_secure' => 'Barangay Hall',                                    'is_other' => false],
            ['description' => 'MSWD Certificate of Indigency (original)',     'where_to_secure' => 'Municipal Social Welfare and Development Office',  'is_other' => false],
            ['description' => 'Medical Certificate/Medical Abstract (original certified true copy)', 'where_to_secure' => 'Physician/Hospital/Clinic', 'is_other' => false],
            ['description' => 'Price Quotation from Pharmacy/Laboratory',     'where_to_secure' => 'Pharmacy',                                         'is_other' => false],
            ['description' => 'Referral from the Physician',                  'where_to_secure' => 'Hospital',                                         'is_other' => false],
        ]);

        $office->services()->create([
            'service_name'        => 'For Animal Bite Assistance',
            'service_description' => 'Financial support for animal bite treatment and anti-rabies vaccination.',
            'service_type'        => 'G2C',
            'classification'      => 'Simple',
            'who_may_avail'       => 'Animal bite victims',
        ])->requirements()->createMany([
            ['description' => 'Barangay Certificate of Residency (original)',    'where_to_secure' => 'Barangay Hall',                                   'is_other' => false],
            ['description' => 'MSWD Certificate of Indigency (original)',        'where_to_secure' => 'Municipal Social Welfare and Development Office', 'is_other' => false],
            ['description' => 'Summary of Vaccines Schedule (original/CTC)',     'where_to_secure' => 'Physician/Hospital/Clinic',                       'is_other' => false],
            ['description' => 'Receipt (Resita)',                                'where_to_secure' => 'Physician/Hospital/Clinic',                       'is_other' => false],
            ['description' => 'Valid ID',                                        'where_to_secure' => 'Requesting Party',                               'is_other' => false],
        ]);

        $office->services()->create([
            'service_name'        => 'For Burial Assistance',
            'service_description' => 'Financial assistance for burial and funeral expenses.',
            'service_type'        => 'G2C',
            'classification'      => 'Simple',
            'who_may_avail'       => 'Families of deceased indigent persons',
        ])->requirements()->createMany([
            ['description' => 'Barangay Certificate of Residency (original)', 'where_to_secure' => 'Barangay Hall',                                   'is_other' => false],
            ['description' => 'MSWD Certificate of Indigency (original)',     'where_to_secure' => 'Municipal Social Welfare and Development Office', 'is_other' => false],
            ['description' => 'Death Certificate (original/CTC)',             'where_to_secure' => 'Physician/Hospital/Clinic',                       'is_other' => false],
            ['description' => 'Contract Bill (Resibo) from Funeral Home',     'where_to_secure' => 'Funeral Home',                                   'is_other' => false],
            ['description' => 'Valid ID (Photocopy)',                         'where_to_secure' => 'Requesting Party',                               'is_other' => false],
        ]);

        $office->services()->create([
            'service_name'        => 'For Fire Victim Assistance',
            'service_description' => 'Emergency financial and material assistance for fire disaster victims.',
            'service_type'        => 'G2C',
            'classification'      => 'Simple',
            'who_may_avail'       => 'Fire victims, Disaster affected individuals',
        ])->requirements()->createMany([
            ['description' => 'Barangay Certificate of Residency (original)',                       'where_to_secure' => 'Barangay Hall',                                   'is_other' => false],
            ['description' => 'MSWD Certificate of Indigency (original)',                           'where_to_secure' => 'Municipal Social Welfare and Development Office', 'is_other' => false],
            ['description' => 'Fire Marshall Report/Police Blotter',                               'where_to_secure' => 'Fire Station / Police Station',                   'is_other' => false],
            ['description' => 'Two photos of fire incident (proof of fire incident)',               'where_to_secure' => 'Fire Marshall Investigation Results',             'is_other' => false],
            ['description' => 'Valid ID (Photocopy)',                                               'where_to_secure' => 'Requesting Party',                               'is_other' => false],
            ['description' => 'Police Clearance',                                                   'where_to_secure' => 'PNP Station',                                     'is_other' => false],
        ]);

        $office->services()->create([
            'service_name'        => 'Issuance of Bidding Documents',
            'service_description' => 'Provision of bidding documents and procurement packages for government suppliers.',
            'service_type'        => 'G2B',
            'classification'      => 'Simple',
            'who_may_avail'       => 'Registered suppliers, Contractors, Business entities',
        ])->requirements()->createMany([
            ['description' => 'Accomplished Request Form',                          'where_to_secure' => 'Bids and Awards Committee Secretariat', 'is_other' => false],
            ['description' => 'Letter of Intent (for civil works bidding documents)', 'where_to_secure' => 'Supplier',                           'is_other' => false],
        ]);

        // ============================================
        // 8. PROVINCIAL GENERAL SERVICES OFFICE
        // ============================================
        $office = Office::create([
            'name'         => 'Provincial General Services Office',
            'abbreviation' => 'PGSO',
            'description'  => 'Manages procurement, supplies, and general services for the provincial government.',
        ]);

        $office->services()->create([
            'service_name'        => 'Issuance of Certificate of Supplier\'s Performance Evaluation',
            'service_description' => 'Certification of suppliers\' performance ratings and procurement history.',
            'service_type'        => 'G2B',
            'classification'      => 'Simple',
            'who_may_avail'       => 'Registered suppliers, Contractors',
        ])->requirements()->createMany([
            ['description' => 'Letter of Intent', 'where_to_secure' => 'Requesting Party', 'is_other' => false],
        ]);

        $office->services()->create([
            'service_name'        => 'Request for Assistance (Supplies and Materials)',
            'service_description' => 'Processing of requests for supplies and materials for government offices.',
            'service_type'        => 'G2G',
            'classification'      => 'Simple',
            'who_may_avail'       => 'PLGU offices, Government agencies',
        ])->requirements()->createMany([
            ['description' => 'Request Letter with notation and approval of the LCE', 'where_to_secure' => 'Requesting Party', 'is_other' => false],
        ]);

        $office->services()->create([
            'service_name'        => 'Issuance of Bid Documents to Prospective Buyers',
            'service_description' => 'Provision of bidding documents and procurement information to suppliers.',
            'service_type'        => 'G2B',
            'classification'      => 'Simple',
            'who_may_avail'       => 'Prospective suppliers, Contractors, Bidders',
        ])->requirements()->createMany([
            ['description' => 'Letter of Intent from Prospective Buyer/s', 'where_to_secure' => 'Prospective Buyer', 'is_other' => false],
        ]);

        // ============================================
        // 9. PROVINCIAL PLANNING AND DEVELOPMENT OFFICE
        // ============================================
        $office = Office::create([
            'name'         => 'Provincial Planning and Development Office',
            'abbreviation' => 'PPDO',
            'description'  => 'Manages provincial development planning, statistical data, and technical assistance for LGUs.',
        ]);

        $office->services()->create([
            'service_name'        => 'Provision of Statistical Data and Information',
            'service_description' => 'Provincial statistical data and demographic information for planning and research.',
            'service_type'        => 'G2G',
            'classification'      => 'Simple',
            'who_may_avail'       => 'Government offices, Researchers, Academic institutions',
        ])->requirements()->createMany([
            ['description' => '1 copy of Accomplished Original Request Form',                                                 'where_to_secure' => 'Planning and Programming Division and Research and Data Management Division', 'is_other' => false],
            ['description' => 'Photocopy of One (1) Valid ID (Primary Government Issued ID) with original for verification', 'where_to_secure' => 'Requesting Party',                                                            'is_other' => false],
        ]);

        $office->services()->create([
            'service_name'        => 'Technical Assistance on Planning and Development',
            'service_description' => 'Technical support in formulating development plans and programs.',
            'service_type'        => 'G2G',
            'classification'      => 'Complex',
            'who_may_avail'       => 'LGUs, Barangays, Government agencies',
        ])->requirements()->createMany([
            ['description' => '1 Original copy of the Approved Request Letter by the Governor', 'where_to_secure' => 'Requesting Party/LGU',                                                         'is_other' => false],
            ['description' => '1 copy of Accomplished Original Request Form',                   'where_to_secure' => 'Planning and Programming Division and Research and Data Management Division', 'is_other' => false],
            ['description' => 'Photocopy of One (1) Valid ID with original for verification',   'where_to_secure' => 'Requesting Party',                                                            'is_other' => false],
        ]);

        // ============================================
        // 10. PROVINCIAL TREASURER'S OFFICE
        // ============================================
        $office = Office::create([
            'name'         => "Provincial Treasurer's Office",
            'abbreviation' => 'PTO',
            'description'  => 'Handles collection of provincial taxes, revenues, and issuance of official receipts and certifications.',
        ]);

        $office->services()->create([
            'service_name'        => 'Collection of Real Property Tax',
            'service_description' => 'Processing of real property tax payments for the province.',
            'service_type'        => 'G2C',
            'classification'      => 'Simple',
            'who_may_avail'       => 'Property owners, Taxpayers',
        ])->requirements()->createMany([
            ['description' => 'Notice of Assessment and Latest Tax Declaration of Real Property (1 original)', 'where_to_secure' => 'Provincial/Municipal Assessor\'s Office', 'is_other' => false],
        ]);

        $office->services()->create([
            'service_name'        => 'Issuance of Certification of No Delinquency',
            'service_description' => 'Certification that a property or entity has no delinquent taxes.',
            'service_type'        => 'G2C',
            'classification'      => 'Simple',
            'who_may_avail'       => 'Property owners, Taxpayers, Businesses',
        ])->requirements()->createMany([
            ['description' => 'Request Form',                                                                    'where_to_secure' => 'Provincial Treasurer\'s Office',          'is_other' => false],
            ['description' => 'Tax Declaration (1 original)',                                                    'where_to_secure' => 'Real Property Owner/Assessor\'s Office',  'is_other' => false],
            ['description' => 'Deed of Sale/Donation/Extra Judicial Partition (1 original and notarized copy)', 'where_to_secure' => 'Real Property Owner',                     'is_other' => false],
        ]);

        // ============================================
        // 11. PROVINCIAL VETERINARY OFFICE
        // ============================================
        $office = Office::create([
            'name'         => 'Provincial Veterinary Office',
            'abbreviation' => 'PVO',
            'description'  => 'Provides veterinary services, animal health programs, quarantine, and livestock development.',
        ]);

        $office->services()->create([
            'service_name'        => 'Animal Vaccination and Health Services',
            'service_description' => 'Vaccination and health inspection services for livestock and animals.',
            'service_type'        => 'G2C',
            'classification'      => 'Simple',
            'who_may_avail'       => 'LGUs, Associations, Farmers, Pet Owners',
        ])->requirements()->createMany([
            ['description' => 'Request Form/Request Letter/Resolution',                                            'where_to_secure' => 'Requesting Parties (LGUs, Associations, Farmers/Pet Owners)', 'is_other' => false],
            ['description' => 'Health/Vaccination Card/Record (issued by PVO for first time vaccination clients)', 'where_to_secure' => 'Requesting Parties (LGUs, Associations, Farmers/Pet Owners)', 'is_other' => false],
        ]);

        $office->services()->create([
            'service_name'        => 'Animal Quarantine Services',
            'service_description' => 'Quarantine and health inspection of livestock and animal imports.',
            'service_type'        => 'G2C',
            'classification'      => 'Complex',
            'who_may_avail'       => 'Livestock owners, Animal traders, Farmers',
        ])->requirements()->createMany([
            ['description' => 'Regulatory documents for animal shipment', 'where_to_secure' => 'Bureau of Animal Industry-National Veterinary Quarantine Service, MAGRO, Private Veterinarians', 'is_other' => false],
        ]);

        $office->services()->create([
            'service_name'        => 'Assistance for Livestock Development Programs',
            'service_description' => 'Technical and advisory services for livestock raising and improvement.',
            'service_type'        => 'G2C',
            'classification'      => 'Complex',
            'who_may_avail'       => 'Farmers, Livestock raisers, Barangays',
        ])->requirements()->createMany([
            ['description' => 'Request Letter Approved by the Governor', 'where_to_secure' => 'Requisitioning Party', 'is_other' => false],
        ]);

        $office->services()->create([
            'service_name'        => 'Dispersal of Animals Program',
            'service_description' => 'Distribution of livestock and animals to qualified beneficiaries.',
            'service_type'        => 'G2C',
            'classification'      => 'Complex',
            'who_may_avail'       => 'Farmers, Cooperatives, Barangays',
        ])->requirements()->createMany([
            ['description' => 'Approved request letter for dispersal of animals', 'where_to_secure' => 'Requisitioning Party', 'is_other' => false],
        ]);

        // ============================================
        // 12. PROVINCIAL LEGAL OFFICE
        // ============================================
        $office = Office::create([
            'name'         => 'Provincial Legal Office',
            'abbreviation' => 'PLO',
            'description'  => 'Provides legal consultation, opinions, and document review for provincial government offices.',
        ]);

        $office->services()->create([
            'service_name'        => 'Legal Consultation and Advice',
            'service_description' => 'Legal consultation services for PLGU offices and authorized persons.',
            'service_type'        => 'G2G',
            'classification'      => 'Complex',
            'who_may_avail'       => 'PLGU officials, Government offices',
        ])->requirements()->createMany([
            ['description' => 'Routing Slip',                                                                      'where_to_secure' => 'Governor\'s Office and other concerned offices', 'is_other' => false],
            ['description' => 'Document Tracking System',                                                          'where_to_secure' => 'Governor\'s Office and other concerned offices', 'is_other' => false],
            ['description' => 'Endorsement with Governor\'s Recommendation',                                       'where_to_secure' => 'Governor\'s Office and other concerned offices', 'is_other' => false],
            ['description' => 'Approved Checklist for Legal Opinion (3 copies)',                                   'where_to_secure' => 'Governor\'s Office and other concerned offices', 'is_other' => false],
            ['description' => 'MOA, MOU, Resolution, Ordinance, Executive Orders and other contracts and documents', 'where_to_secure' => 'Requisitioning Office',                       'is_other' => false],
        ]);

        // ============================================
        // 13. PROVINCIAL HUMAN RESOURCE MANAGEMENT AND DEVELOPMENT OFFICE
        // ============================================
        $office = Office::create([
            'name'         => 'Provincial Human Resource Management and Development Office',
            'abbreviation' => 'PHRMDO',
            'description'  => 'Manages personnel records, training programs, employee benefits, and HR services.',
        ]);

        $office->services()->create([
            'service_name'        => 'Issuance of Service Records and Certifications',
            'service_description' => 'Certification of service records and employment history for PLGU employees.',
            'service_type'        => 'G2C',
            'classification'      => 'Simple',
            'who_may_avail'       => 'Government employees, Retired officials',
        ])->requirements()->createMany([
            ['description' => 'Document Tracking',                                                    'where_to_secure' => 'Requesting Party',               'is_other' => false],
            ['description' => 'Accomplished Request Form (1 original)',                               'where_to_secure' => 'PHRMDO',                         'is_other' => false],
            ['description' => 'Official Receipt (OR Form No. 51) if applicable (original)',          'where_to_secure' => 'Provincial Treasurer\'s Office',  'is_other' => false],
            ['description' => 'Authorization Letter - for HR requests by representative',            'where_to_secure' => 'Requesting Party',               'is_other' => false],
            ['description' => 'PSA Birth Certificate (if applicable) (original)',                    'where_to_secure' => 'Requesting Party',               'is_other' => false],
        ]);

        $office->services()->create([
            'service_name'        => 'Processing of Loan Transmittals (HDMF, NICO, LandBank)',
            'service_description' => 'Processing and transmittal of employee loan applications to lending institutions.',
            'service_type'        => 'G2G',
            'classification'      => 'Simple',
            'who_may_avail'       => 'PLGU employees',
        ])->requirements()->createMany([
            ['description' => 'Tracking Sheet (1 original copy)',                                     'where_to_secure' => 'Requesting Party',               'is_other' => false],
            ['description' => 'Accomplished Request Form',                                            'where_to_secure' => 'PHRMDO-Admin',                   'is_other' => false],
            ['description' => 'Official Receipt (original) except PAG-IBIG, GSIS, CCMPC',           'where_to_secure' => 'Provincial Treasurer\'s Office',  'is_other' => false],
            ['description' => 'HDMF MPL Form - for HDMF MPL/Calamity Loan',                         'where_to_secure' => 'PHRMDO',                         'is_other' => false],
            ['description' => '2 Valid IDs (1 photocopy each except TIN card) - for HDMF MPL loan', 'where_to_secure' => 'Requesting Party',               'is_other' => false],
        ]);

        $office->services()->create([
            'service_name'        => 'Conduct of Training and Development Programs',
            'service_description' => 'Capacity building and professional development programs for government employees.',
            'service_type'        => 'G2G',
            'classification'      => 'Complex',
            'who_may_avail'       => 'PLGU employees, Government staff',
        ])->requirements()->createMany([
            ['description' => 'Approved Request Letter by the LCE with Document Tracking Slip', 'where_to_secure' => 'Provincial Governor\'s Office', 'is_other' => false],
            ['description' => 'Relevant Documents for training',                                 'where_to_secure' => 'Requesting Party',             'is_other' => false],
        ]);

        // ============================================
        // 14. PROVINCIAL LIBRARY / SANGGUNIANG PANLALAWIGAN
        // ============================================
        $office = Office::create([
            'name'         => 'Sangguniang Panlalawigan / Provincial Library',
            'abbreviation' => 'SP',
            'description'  => 'Maintains legislative records, archives, and library services for the province.',
        ]);

        $office->services()->create([
            'service_name'        => 'Issuance of Copies of Approved Resolutions, Ordinances, Journal of Proceedings, Minutes and other documents',
            'service_description' => 'Provision of certified copies of legislative documents and official records.',
            'service_type'        => 'G2G',
            'classification'      => 'Simple',
            'who_may_avail'       => 'Government offices, Public, Researchers',
        ])->requirements()->createMany([
            ['description' => 'Request Form (1 original copy)',   'where_to_secure' => 'Library and Archives Division',       'is_other' => false],
            ['description' => 'Billing Slip (1 original copy)',   'where_to_secure' => 'Library and Archives Division',       'is_other' => false],
            ['description' => 'Official Receipt (1 original copy)', 'where_to_secure' => 'Provincial Treasurer\'s Office',   'is_other' => false],
        ]);

        $office->services()->create([
            'service_name'        => 'Issuance of Certificate of Posting',
            'service_description' => 'Certification of posting and public notice compliance for legislative documents.',
            'service_type'        => 'G2G',
            'classification'      => 'Simple',
            'who_may_avail'       => 'Government offices, Applicants',
        ])->requirements()->createMany([
            ['description' => 'Letter Request for Certificate of Posting (1 original copy)', 'where_to_secure' => 'Requisitioning Party',          'is_other' => false],
            ['description' => 'Documents for Posting (1 original copy)',                     'where_to_secure' => 'Requisitioning Party',          'is_other' => false],
            ['description' => 'Billing Slip (1 original copy)',                              'where_to_secure' => 'Administrative Division',       'is_other' => false],
            ['description' => 'Official Receipt',                                             'where_to_secure' => 'Provincial Treasurer\'s Office', 'is_other' => false],
        ]);

        // ============================================
        // 15. PROVINCIAL SOCIAL WELFARE AND DEVELOPMENT OFFICE
        // ============================================
        $office = Office::create([
            'name'         => 'Provincial Social Welfare and Development Office',
            'abbreviation' => 'PSWDO',
            'description'  => 'Delivers social services, PhilHealth enrollment, PWD assistance, and welfare programs.',
        ]);

        $office->services()->create([
            'service_name'        => 'Provision of PhilHealth Membership Enrollment Assistance',
            'service_description' => 'Administrative support and assistance for PhilHealth membership enrollment.',
            'service_type'        => 'G2C',
            'classification'      => 'Simple',
            'who_may_avail'       => 'Indigent families, Unregistered PhilHealth members',
        ])->requirements()->createMany([
            ['description' => 'Accomplished PhilHealth Member Registration Form (PMRF) (1 original)',                                    'where_to_secure' => 'PSWDO / Download Online',           'is_other' => false],
            ['description' => 'Marriage Certificate, if married (1 photocopy)',                                                           'where_to_secure' => 'Requesting Party',                 'is_other' => false],
            ['description' => 'Birth Certificate, if not married (1 photocopy)',                                                          'where_to_secure' => 'Requesting Party',                 'is_other' => false],
            ['description' => 'Birth Certificate of Dependents (1 photocopy)',                                                            'where_to_secure' => 'Requesting Party',                 'is_other' => false],
            ['description' => 'Certificate of confinement/medical certificate/medical abstract (1 original/certified photocopy)',         'where_to_secure' => 'Hospital/Any Health Facilities',  'is_other' => false],
        ]);

        $office->services()->create([
            'service_name'        => 'Assistance for Persons with Disabilities (PWD)',
            'service_description' => 'Social services, benefits and programs for persons with disabilities.',
            'service_type'        => 'G2C',
            'classification'      => 'Complex',
            'who_may_avail'       => 'Persons with disabilities, PWD families',
        ])->requirements()->createMany([
            ['description' => 'Whole Body Photo (1 copy)',                                            'where_to_secure' => 'Requesting Party',                                                     'is_other' => false],
            ['description' => 'Request Letter (1 original/certified photocopy)',                     'where_to_secure' => 'Requesting Party',                                                     'is_other' => false],
            ['description' => 'Medical Certificate (1 original/certified photocopy)',                'where_to_secure' => 'Hospital/Any Health Facilities',                                       'is_other' => false],
            ['description' => 'Barangay Certification (Residency) (1 original/certified photocopy)','where_to_secure' => 'Office of the Punong Barangay / Requesting Party',                    'is_other' => false],
            ['description' => 'Case Summary Report (1 original/certified photocopy)',               'where_to_secure' => 'Municipal Social Welfare & Development (MSWD) Office / Requesting Party', 'is_other' => false],
        ]);

        $office->services()->create([
            'service_name'        => 'Assistance for Victims of Abuse/VAWC',
            'service_description' => 'Protection and welfare services for victims of abuse and violence against women and children.',
            'service_type'        => 'G2C',
            'classification'      => 'Complex',
            'who_may_avail'       => 'Victims of abuse, Women and children in need of protection',
        ])->requirements()->createMany([
            ['description' => 'Medical Certificate/Medico-legal (1 original/certified photocopy)',   'where_to_secure' => 'Hospital/Any Health Facility',          'is_other' => false],
            ['description' => 'Case Study Report/MS Certificate (1 original/certified photocopy)',  'where_to_secure' => 'MSWD Office / Requisitioning Party',    'is_other' => false],
        ]);
    }
}