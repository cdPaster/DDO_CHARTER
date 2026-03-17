<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds - COMPLETE version with ALL services
     * Source: PLGU Davao de Oro Citizens Charter 2025 (1st Edition)
     */
    public function run(): void
    {
        // ============================================
        // 1. PROVINCIAL ACCOUNTANT'S OFFICE (ID: 1)
        // ============================================
        Service::create([
            'office_id' => 1,
            'service_name' => 'Certification of Premium and Loan Repayment (Employed from 2006 and Onwards)',
            'service_description' => 'Issuance of certification documents for premium and loan repayment records for employees hired from 2006 onwards',
            'service_type' => 'G2C',
            'classification' => 'Simple',
            'who_may_avail' => 'All current, resigned and retired employees of the PLGU',
            'fees_required' => 'Free',
            'processing_time' => '3-5 working days'
        ]);

        Service::create([
            'office_id' => 1,
            'service_name' => 'Certification of Premium and Loan Repayment (Employed Before 2006)',
            'service_description' => 'Certification of premium and loan repayment for employees hired before 2006',
            'service_type' => 'G2C',
            'classification' => 'Simple',
            'who_may_avail' => 'Retired and resigned employees hired before 2006',
            'fees_required' => 'Free',
            'processing_time' => '5-7 working days'
        ]);

        // ============================================
        // 2. PROVINCIAL AGRICULTURIST OFFICE (ID: 2)
        // ============================================
        
        // Plans, Programs and Agri-Institutional Services
        Service::create([
            'office_id' => 2,
            'service_name' => 'Preparation of Agribusiness Plan',
            'service_description' => 'Comprehensive assistance in preparing agribusiness plans for farming enterprises',
            'service_type' => 'G2C',
            'classification' => 'Complex',
            'who_may_avail' => 'Farmers, Farmer Cooperatives and Associations',
            'fees_required' => 'Free',
            'processing_time' => '15-30 working days'
        ]);

        Service::create([
            'office_id' => 2,
            'service_name' => 'Facilitation of Agriculture and Fishery Situationer and Commodity Profile',
            'service_description' => 'Provision of current agricultural and fishery situationer reports and commodity profiles',
            'service_type' => 'G2C',
            'classification' => 'Simple',
            'who_may_avail' => 'Farmers, Farmer Cooperatives, Associations, Government Agencies, NGOs',
            'fees_required' => 'Free',
            'processing_time' => '3-5 working days'
        ]);

        // Crops and Fisheries Services
        Service::create([
            'office_id' => 2,
            'service_name' => 'Provision of Agricultural Inputs',
            'service_description' => 'Distribution of seeds, fingerlings, seedlings and other agricultural inputs for farmers',
            'service_type' => 'G2C',
            'classification' => 'Complex',
            'who_may_avail' => 'Farmers, Farmer Cooperatives and Associations, Government Agencies, NGOs',
            'fees_required' => 'Free',
            'processing_time' => '5-10 working days'
        ]);

        Service::create([
            'office_id' => 2,
            'service_name' => 'Facilitation of Training/Seminars on Package of Technology (POT), Farmers Field School (FFS), Aquaculture, Food and Processing, Fishery Law Orientation and Seed Orientation',
            'service_description' => 'Conduct of various training programs and seminars on agricultural technology and best practices',
            'service_type' => 'G2C',
            'classification' => 'Complex',
            'who_may_avail' => 'Farmers, Farmer Cooperatives, Associations, Government Agencies, NGOs',
            'fees_required' => 'Free',
            'processing_time' => '7-14 working days'
        ]);

        // Agricultural and Biosystems Engineering Services
        Service::create([
            'office_id' => 2,
            'service_name' => 'Facilitation of the Delivery and Installation of Farm Machineries and Equipment',
            'service_description' => 'Assistance in sourcing, delivery and installation of farm machinery and equipment',
            'service_type' => 'G2C',
            'classification' => 'Complex',
            'who_may_avail' => 'Farmers, Farmer Cooperatives and Associations',
            'fees_required' => 'Free',
            'processing_time' => '30-60 working days'
        ]);

        Service::create([
            'office_id' => 2,
            'service_name' => 'Facilitation of the Design, Establishment and Rehabilitation of Agricultural Infrastructure Projects',
            'service_description' => 'Technical assistance in designing and implementing agricultural infrastructure projects',
            'service_type' => 'G2C',
            'classification' => 'Complex',
            'who_may_avail' => 'Farmers, Farmer Cooperatives, Associations, Barangays',
            'fees_required' => 'Free',
            'processing_time' => '60-90 working days'
        ]);

        Service::create([
            'office_id' => 2,
            'service_name' => 'Facilitation of Farm Machineries and Equipment Rental',
            'service_description' => 'Facilitation of access to farm machinery and equipment rental services',
            'service_type' => 'G2C',
            'classification' => 'Simple',
            'who_may_avail' => 'Individual farmers, Farmer Cooperatives and Associations',
            'fees_required' => 'Rental fees apply (hourly/daily rate)',
            'processing_time' => '2-3 working days'
        ]);

        // Farm Administrative Services
        Service::create([
            'office_id' => 2,
            'service_name' => 'Facilitation in the Conduct of Immersion of On-The-Job Training for Senior High Schools & College Agriculture Students',
            'service_description' => 'Coordination of internship and on-the-job training programs for students',
            'service_type' => 'G2G',
            'classification' => 'Complex',
            'who_may_avail' => 'Senior High School and College Agriculture Students',
            'fees_required' => 'Free',
            'processing_time' => '14-21 working days'
        ]);

        // Cooperative Development Services
        Service::create([
            'office_id' => 2,
            'service_name' => 'Facilitation of Pre-Membership and Education Seminar, Loan Promotion Seminar and Cooperative Training',
            'service_description' => 'Training and seminars for cooperative members and leaders on cooperative development',
            'service_type' => 'G2C',
            'classification' => 'Complex',
            'who_may_avail' => 'Farmers Cooperatives, Farmer Groups and Associations',
            'fees_required' => 'Free',
            'processing_time' => '7-14 working days'
        ]);

        Service::create([
            'office_id' => 2,
            'service_name' => 'Facilitation for the Release of Loan for Micro Credit Assistance Program to Cooperatives (MCAPC)',
            'service_description' => 'Processing and facilitation of micro-credit loans for cooperative development and business operations',
            'service_type' => 'G2C',
            'classification' => 'Complex',
            'who_may_avail' => 'Registered Cooperatives',
            'fees_required' => 'No interest loans',
            'processing_time' => '21-30 working days'
        ]);

        // ============================================
        // 3. PROVINCIAL ADMINISTRATOR'S OFFICE (ID: 3)
        // ============================================
        
        // Administrative Support and Records Management Services
        Service::create([
            'office_id' => 3,
            'service_name' => 'Issuance of Copies of Administrative Orders, Executive Orders, Memorandum Orders, and Office Orders',
            'service_description' => 'Provision of certified copies of provincial administrative directives and orders',
            'service_type' => 'G2G',
            'classification' => 'Simple',
            'who_may_avail' => 'Employees of PLGU-Davao de Oro, Government Agencies, Public',
            'fees_required' => 'PHP 5-10 per copy',
            'processing_time' => '1-2 working days'
        ]);

        Service::create([
            'office_id' => 3,
            'service_name' => 'Provision of Duplicating Services',
            'service_description' => 'Photocopying and document reproduction services for government offices',
            'service_type' => 'G2G',
            'classification' => 'Simple',
            'who_may_avail' => 'Employees of PLGU-Davao de Oro, Other Government Offices',
            'fees_required' => 'PHP 1-2 per page',
            'processing_time' => '1 working day'
        ]);

        Service::create([
            'office_id' => 3,
            'service_name' => 'Provision of Stenographic Services',
            'service_description' => 'Shorthand and transcription services for official documents and meetings',
            'service_type' => 'G2G',
            'classification' => 'Complex',
            'who_may_avail' => 'Employees of PLGU-Davao de Oro',
            'fees_required' => 'Free',
            'processing_time' => '3-5 working days'
        ]);

        // Delivery of Communication Letters
        Service::create([
            'office_id' => 3,
            'service_name' => 'Delivery of Communication Letters',
            'service_description' => 'Courier and delivery services for official correspondences and documents',
            'service_type' => 'G2G',
            'classification' => 'Simple',
            'who_may_avail' => 'Employees of PLGU-Davao de Oro, Government Offices',
            'fees_required' => 'Free',
            'processing_time' => '1-2 working days'
        ]);

        // Community Affairs and Development Division
        Service::create([
            'office_id' => 3,
            'service_name' => 'Validation of requests submitted by citizens to the Office of the Governor',
            'service_description' => 'Verification and processing of citizen requests and complaints directed to the Governor',
            'service_type' => 'G2C',
            'classification' => 'Simple',
            'who_may_avail' => 'Citizens of Davao de Oro',
            'fees_required' => 'Free',
            'processing_time' => '5-7 working days'
        ]);

        // Housing and Homesite Development Services
        Service::create([
            'office_id' => 3,
            'service_name' => 'Issuance of Certificate of Electrification/Certificate of Verification',
            'service_description' => 'Certification of electrical and utility infrastructure status for properties and barangays',
            'service_type' => 'G2C',
            'classification' => 'Simple',
            'who_may_avail' => 'Property Owners, Beneficiaries/Clients, Barangays',
            'fees_required' => 'PHP 50-100',
            'processing_time' => '3-5 working days'
        ]);

        // Investment and Business Development Services
        Service::create([
            'office_id' => 3,
            'service_name' => 'Application of Investment Incentives',
            'service_description' => 'Assistance in applying for provincial investment incentives and business benefits',
            'service_type' => 'G2B',
            'classification' => 'Complex',
            'who_may_avail' => 'All Businessmen, Entrepreneurs, Investors',
            'fees_required' => 'Free',
            'processing_time' => '15-30 working days'
        ]);

        Service::create([
            'office_id' => 3,
            'service_name' => 'Facilitation for Non-Fiscal Incentives Investments',
            'service_description' => 'Facilitation of non-fiscal incentives such as technical support, market linkage, and training',
            'service_type' => 'G2B',
            'classification' => 'Complex',
            'who_may_avail' => 'Businesses, Entrepreneurs, Investors',
            'fees_required' => 'Free',
            'processing_time' => '7-15 working days'
        ]);

        Service::create([
            'office_id' => 3,
            'service_name' => 'Facilitation of Data Request Approval of Clients and Stakeholders',
            'service_description' => 'Processing of data requests for business intelligence and research purposes',
            'service_type' => 'G2B',
            'classification' => 'Simple',
            'who_may_avail' => 'All Businessmen, NGAs, LGUs, Researchers',
            'fees_required' => 'Free',
            'processing_time' => '5-10 working days'
        ]);

        Service::create([
            'office_id' => 3,
            'service_name' => 'Provision of Technical Support Services to Micro, Small and Medium Enterprises (MSMEs), Business Chambers, National Government Agency partners, Local Government Units, & Investors',
            'service_description' => 'Business advisory and technical assistance for enterprise development and expansion',
            'service_type' => 'G2B',
            'classification' => 'Complex',
            'who_may_avail' => 'MSMEs, Business Chambers, NGAs, LGUs, Investors',
            'fees_required' => 'Free',
            'processing_time' => '10-20 working days'
        ]);

        Service::create([
            'office_id' => 3,
            'service_name' => 'Provision of training/technical assistance to PLGU Offices',
            'service_description' => 'Capacity building and training programs for government staff on business development',
            'service_type' => 'G2G',
            'classification' => 'Complex',
            'who_may_avail' => 'All PLGU Offices',
            'fees_required' => 'Free',
            'processing_time' => '15-30 working days'
        ]);

        // Information and Public Relations Services
        Service::create([
            'office_id' => 3,
            'service_name' => 'Production of Audio Visual Presentation (AVP)',
            'service_description' => 'Creation of video and multimedia content for government programs and communications',
            'service_type' => 'G2G',
            'classification' => 'Complex',
            'who_may_avail' => 'Inter-Office, NGAs, LGUs, Academe, Other Sectors',
            'fees_required' => 'Free to PHP 10,000 depending on complexity',
            'processing_time' => '30-45 working days'
        ]);

        Service::create([
            'office_id' => 3,
            'service_name' => 'Facilitation of Press Conferences and Online/Virtual Forums',
            'service_description' => 'Organization and logistics support for media engagement and public communication events',
            'service_type' => 'G2G',
            'classification' => 'Complex',
            'who_may_avail' => 'Inter-Office, NGAs, LGUs, Academe, Other Sectors',
            'fees_required' => 'Free',
            'processing_time' => '7-10 working days'
        ]);

        Service::create([
            'office_id' => 3,
            'service_name' => 'Provision of Print Publications',
            'service_description' => 'Printing of brochures, pamphlets, and promotional materials for government programs',
            'service_type' => 'G2G',
            'classification' => 'Complex',
            'who_may_avail' => 'Inter-Office, NGAs, LGUs, Academe, Other Sectors',
            'fees_required' => 'Cost sharing basis',
            'processing_time' => '10-15 working days'
        ]);

        Service::create([
            'office_id' => 3,
            'service_name' => 'Provision of Social Media Publications',
            'service_description' => 'Management and posting of content on PLGU social media channels and platforms',
            'service_type' => 'G2G',
            'classification' => 'Simple',
            'who_may_avail' => 'Inter-Office, NGAs, LGUs, Academe, Other Sectors',
            'fees_required' => 'Free',
            'processing_time' => '2-3 working days'
        ]);

        Service::create([
            'office_id' => 3,
            'service_name' => 'Facilitation of Broadcast TV/Radio Airings',
            'service_description' => 'Coordination of radio and television airtime for public announcements and programs',
            'service_type' => 'G2G',
            'classification' => 'Complex',
            'who_may_avail' => 'Inter-Office, NGAs, LGUs, Academe, Other Sectors',
            'fees_required' => 'Free to PHP 5,000 depending on duration',
            'processing_time' => '7-14 working days'
        ]);

        // Public Employment Services Division
        Service::create([
            'office_id' => 3,
            'service_name' => 'Issuance of Employment Referral Letter',
            'service_description' => 'Provision of employment referral and job placement assistance services',
            'service_type' => 'G2C',
            'classification' => 'Simple',
            'who_may_avail' => 'Job Seekers, Unemployed Persons',
            'fees_required' => 'Free',
            'processing_time' => '2-3 working days'
        ]);

        // Rehabilitation Services
        Service::create([
            'office_id' => 3,
            'service_name' => 'Screening and Facilitation for Conjugal Visit',
            'service_description' => 'Processing and facilitation of conjugal visits for inmates and their families',
            'service_type' => 'G2C',
            'classification' => 'Simple',
            'who_may_avail' => 'Families of Inmates',
            'fees_required' => 'Free',
            'processing_time' => '3-5 working days'
        ]);

        // Tourism Development and Promotion Services
        Service::create([
            'office_id' => 3,
            'service_name' => 'Facilitation of Internal Clients, Stakeholders, & Tourists/Visitors\' Requests',
            'service_description' => 'Processing of requests from internal stakeholders and government partners for tourism services',
            'service_type' => 'G2G',
            'classification' => 'Simple',
            'who_may_avail' => 'Government Offices, NGAs, LGUs',
            'fees_required' => 'Free',
            'processing_time' => '2-5 working days'
        ]);

        Service::create([
            'office_id' => 3,
            'service_name' => 'Facilitation of External Clients, Stakeholders, & Tourists/Visitors\' Requests',
            'service_description' => 'Assistance to tourists and external visitors regarding tourism services and information',
            'service_type' => 'G2C',
            'classification' => 'Simple',
            'who_may_avail' => 'Tourists, Visitors, External Stakeholders',
            'fees_required' => 'Free',
            'processing_time' => '1-2 working days'
        ]);

        Service::create([
            'office_id' => 3,
            'service_name' => 'Fee-based Site Inspection, Exploration, and Validation of Site Destination and Other Related Tourism Establishments',
            'service_description' => 'Professional inspection and assessment of tourism establishments with technical evaluation',
            'service_type' => 'G2B',
            'classification' => 'Complex',
            'who_may_avail' => 'Tourism-related and oriented establishments, Resort Owners',
            'fees_required' => 'PHP 1,000-5,000 depending on area',
            'processing_time' => '5-10 working days'
        ]);

        Service::create([
            'office_id' => 3,
            'service_name' => 'No-cost Site Inspection, Exploration, and Validation of Site Destination and Other Related Tourism Establishments',
            'service_description' => 'Complimentary inspection and assessment of tourism sites and facilities',
            'service_type' => 'G2B',
            'classification' => 'Complex',
            'who_may_avail' => 'Community-based Ecotourism Associations, Barangay LGUs',
            'fees_required' => 'Free',
            'processing_time' => '7-15 working days'
        ]);

        Service::create([
            'office_id' => 3,
            'service_name' => 'Conduct of Tourism Manpower Development for Industry Workers, Service Frontliners and Community-based Managed Destinations',
            'service_description' => 'Training programs for tourism workers and community-based guides on hospitality and service excellence',
            'service_type' => 'G2C',
            'classification' => 'Complex',
            'who_may_avail' => 'Tourism frontliners, Community-based destination groups, People\'s Organizations',
            'fees_required' => 'Free',
            'processing_time' => '14-21 working days'
        ]);

        Service::create([
            'office_id' => 3,
            'service_name' => 'Tourism Exhibition and Exposition Participation',
            'service_description' => 'Assistance in tourism marketing events and exposition participation for destination promotion',
            'service_type' => 'G2B',
            'classification' => 'Complex',
            'who_may_avail' => 'NGAs, LGUs, Tourism Stakeholders',
            'fees_required' => 'Free to PHP 50,000 depending on event',
            'processing_time' => '30-60 working days'
        ]);

        Service::create([
            'office_id' => 3,
            'service_name' => 'Provision of Technical Support Services to Tourism Stakeholders',
            'service_description' => 'Business and technical assistance for tourism enterprises and destination development',
            'service_type' => 'G2B',
            'classification' => 'Complex',
            'who_may_avail' => 'Tourism Stakeholders, LGUs, NGAs',
            'fees_required' => 'Free',
            'processing_time' => '10-20 working days'
        ]);

        Service::create([
            'office_id' => 3,
            'service_name' => 'Facilitation of Culture and Arts Program and Events Assistance Request',
            'service_description' => 'Support and facilitation for cultural and arts programs and special events',
            'service_type' => 'G2C',
            'classification' => 'Complex',
            'who_may_avail' => 'Tourism Stakeholders, LGUs, NGAs, Cultural Groups',
            'fees_required' => 'Free to PHP 20,000 depending on program',
            'processing_time' => '15-30 working days'
        ]);

        Service::create([
            'office_id' => 3,
            'service_name' => 'Facilitation of Artist Support Services Request',
            'service_description' => 'Assistance and support programs for local artists and cultural workers',
            'service_type' => 'G2C',
            'classification' => 'Complex',
            'who_may_avail' => 'Tourism Stakeholders, LGUs, NGAs, Artists',
            'fees_required' => 'Free to PHP 10,000',
            'processing_time' => '10-20 working days'
        ]);

        // ============================================
        // 4. PROVINCIAL ASSESSOR'S OFFICE (ID: 4)
        // ============================================
        
        Service::create([
            'office_id' => 4,
            'service_name' => 'Issuance of Certificate of Landholding',
            'service_description' => 'Certification of land ownership and holdings in the province',
            'service_type' => 'G2C',
            'classification' => 'Simple',
            'who_may_avail' => 'Property Owners',
            'fees_required' => 'PHP 50-100 per certificate',
            'processing_time' => '2-3 working days'
        ]);

        Service::create([
            'office_id' => 4,
            'service_name' => 'Issuance of Certificate of No-Landholding',
            'service_description' => 'Certification that a person has no registered landholdings in the province',
            'service_type' => 'G2C',
            'classification' => 'Simple',
            'who_may_avail' => 'All Citizens',
            'fees_required' => 'PHP 50-100',
            'processing_time' => '2-3 working days'
        ]);

        Service::create([
            'office_id' => 4,
            'service_name' => 'Issuance of Certified True Copy of Tax Declaration',
            'service_description' => 'Certified copies of tax declaration documents for property records',
            'service_type' => 'G2C',
            'classification' => 'Simple',
            'who_may_avail' => 'Property Owners, Concerned Parties',
            'fees_required' => 'PHP 50-100',
            'processing_time' => '2-3 working days'
        ]);

        Service::create([
            'office_id' => 4,
            'service_name' => 'Preparation and release of Real Property Tax Order of Payment (RPTOP)',
            'service_description' => 'Issuance of tax payment orders for real properties',
            'service_type' => 'G2C',
            'classification' => 'Simple',
            'who_may_avail' => 'Property Owners, Tax Payers',
            'fees_required' => 'No fee - tax payment separate',
            'processing_time' => '2-3 working days'
        ]);

        Service::create([
            'office_id' => 4,
            'service_name' => 'Annotation of Real Estate Mortgage',
            'service_description' => 'Recording of mortgage annotations on real property tax declarations',
            'service_type' => 'G2C',
            'classification' => 'Simple',
            'who_may_avail' => 'Property Owners, Financial Institutions',
            'fees_required' => 'PHP 100-200',
            'processing_time' => '3-5 working days'
        ]);

        Service::create([
            'office_id' => 4,
            'service_name' => 'Cancellation of Real Estate Mortgage Annotation',
            'service_description' => 'Removal of mortgage annotations from property records upon loan completion',
            'service_type' => 'G2C',
            'classification' => 'Simple',
            'who_may_avail' => 'Property Owners, Financial Institutions',
            'fees_required' => 'PHP 100-200',
            'processing_time' => '3-5 working days'
        ]);

        // Tax Mapping Services
        Service::create([
            'office_id' => 4,
            'service_name' => 'Consolidation of Assessment',
            'service_description' => 'Merging of separate property assessments into one consolidated assessment',
            'service_type' => 'G2C',
            'classification' => 'Complex',
            'who_may_avail' => 'Property Owners',
            'fees_required' => 'PHP 500-1,000',
            'processing_time' => '7-15 working days'
        ]);

        // Property Valuation Services
        Service::create([
            'office_id' => 4,
            'service_name' => 'Subdivision of Assessment',
            'service_description' => 'Division of property assessment for subdivision and real estate purposes',
            'service_type' => 'G2C',
            'classification' => 'Complex',
            'who_may_avail' => 'Property Owners, Surveyors',
            'fees_required' => 'PHP 500-1,500',
            'processing_time' => '10-20 working days'
        ]);

        Service::create([
            'office_id' => 4,
            'service_name' => 'Appraisal and Assessment of New Buildings and Other Structures',
            'service_description' => 'Valuation and assessment of newly constructed buildings and structures',
            'service_type' => 'G2C',
            'classification' => 'Complex',
            'who_may_avail' => 'Property Owners, Builders',
            'fees_required' => 'PHP 1,000-5,000 depending on structure',
            'processing_time' => '15-30 working days'
        ]);

        Service::create([
            'office_id' => 4,
            'service_name' => 'Transfer of Ownership',
            'service_description' => 'Processing of property ownership transfer and assessment updates',
            'service_type' => 'G2C',
            'classification' => 'Simple',
            'who_may_avail' => 'Property Owners',
            'fees_required' => 'PHP 200-500',
            'processing_time' => '5-10 working days'
        ]);

        // ============================================
        // 5. PROVINCIAL DISASTER RISK REDUCTION AND MANAGEMENT OFFICE (ID: 5)
        // ============================================
        
        Service::create([
            'office_id' => 5,
            'service_name' => 'Provision of Disaster Risk Reduction Management (DRRM) Technical Assistance (Trainings/ Seminars/ IECs and other Capacity Building Activities)',
            'service_description' => 'Training and capacity building programs on disaster risk reduction and management',
            'service_type' => 'G2G',
            'classification' => 'Complex',
            'who_may_avail' => 'LGUs, NGAs, Communities, Organizations',
            'fees_required' => 'Free',
            'processing_time' => '15-30 working days'
        ]);

        Service::create([
            'office_id' => 5,
            'service_name' => 'Provision of Technical Assistance on Formulation of DRR-CCA related Plans',
            'service_description' => 'Technical support in developing disaster risk reduction and climate change adaptation plans',
            'service_type' => 'G2G',
            'classification' => 'Complex',
            'who_may_avail' => 'LGUs, Government Offices, Barangays',
            'fees_required' => 'Free',
            'processing_time' => '30-60 working days'
        ]);

        Service::create([
            'office_id' => 5,
            'service_name' => 'Emergency Response Operations Services',
            'service_description' => 'Coordination and deployment of emergency response during disasters and calamities',
            'service_type' => 'G2C',
            'classification' => 'Complex',
            'who_may_avail' => 'Disaster-affected communities and individuals',
            'fees_required' => 'Free',
            'processing_time' => 'Immediate'
        ]);

        Service::create([
            'office_id' => 5,
            'service_name' => 'Augmentation of Search, Rescue and Retrieval Operation',
            'service_description' => 'Additional support and resources for search and rescue operations',
            'service_type' => 'G2G',
            'classification' => 'Complex',
            'who_may_avail' => 'LDRRMOs, BDRRMOs, Public and Private Agencies',
            'fees_required' => 'Free',
            'processing_time' => 'Immediate'
        ]);

        Service::create([
            'office_id' => 5,
            'service_name' => 'Lending of rescue tools and equipment',
            'service_description' => 'Provision of rescue equipment and tools during emergency situations and disasters',
            'service_type' => 'G2G',
            'classification' => 'Simple',
            'who_may_avail' => 'LGUs, NGOs, Response Groups',
            'fees_required' => 'Free',
            'processing_time' => '1-2 working days'
        ]);

        // ============================================
        // 6. PROVINCIAL ENVIRONMENT AND NATURAL RESOURCES OFFICE (ID: 6)
        // ============================================
        
        Service::create([
            'office_id' => 6,
            'service_name' => 'Provision of Seedlings - (Native Trees)',
            'service_description' => 'Distribution of native tree seedlings for environmental and reforestation programs',
            'service_type' => 'G2C',
            'classification' => 'Simple',
            'who_may_avail' => 'Communities, Organizations, Barangays, Environmental Groups',
            'fees_required' => 'Free to minimal cost',
            'processing_time' => '5-10 working days'
        ]);

        Service::create([
            'office_id' => 6,
            'service_name' => 'Provision of Seedlings - (Fruit Trees)',
            'service_description' => 'Distribution of fruit tree seedlings for agroforestry and livelihood programs',
            'service_type' => 'G2C',
            'classification' => 'Simple',
            'who_may_avail' => 'Farmers, Communities, Organizations',
            'fees_required' => 'Free to minimal cost',
            'processing_time' => '5-10 working days'
        ]);

        Service::create([
            'office_id' => 6,
            'service_name' => 'Site/ Area Verification',
            'service_description' => 'Verification and assessment of mining and quarrying areas for compliance',
            'service_type' => 'G2B',
            'classification' => 'Complex',
            'who_may_avail' => 'Mining operators, Quarry operators, Business entities',
            'fees_required' => 'PHP 500-2,000 depending on area',
            'processing_time' => '10-20 working days'
        ]);

        Service::create([
            'office_id' => 6,
            'service_name' => 'Issuance of Endorsement Letter to MGB XI for Area Status Clearance',
            'service_description' => 'Provincial endorsement for mining area status assessment to regional mining office',
            'service_type' => 'G2B',
            'classification' => 'Complex',
            'who_may_avail' => 'Mining operators, Business entities',
            'fees_required' => 'Free',
            'processing_time' => '10-15 working days'
        ]);

        Service::create([
            'office_id' => 6,
            'service_name' => 'Issuance of Requests for Clearance and Notice of Posting',
            'service_description' => 'Issuance of clearance and posting notices for mining and quarrying applications',
            'service_type' => 'G2B',
            'classification' => 'Simple',
            'who_may_avail' => 'Mining operators, Quarry operators',
            'fees_required' => 'PHP 100-300',
            'processing_time' => '5-10 working days'
        ]);

        Service::create([
            'office_id' => 6,
            'service_name' => 'Issuance of Endorsement to MGB XI for Area Viability Assessment',
            'service_description' => 'Recommendation letter for mining area viability assessment',
            'service_type' => 'G2B',
            'classification' => 'Complex',
            'who_may_avail' => 'Mining operators, Business entities',
            'fees_required' => 'Free',
            'processing_time' => '15-25 working days'
        ]);

        Service::create([
            'office_id' => 6,
            'service_name' => 'Issuance of Certificate of Posting',
            'service_description' => 'Certificate proving that mining/quarrying application was properly posted',
            'service_type' => 'G2B',
            'classification' => 'Simple',
            'who_may_avail' => 'Mining operators, Quarry operators',
            'fees_required' => 'PHP 100-200',
            'processing_time' => '3-5 working days'
        ]);

        Service::create([
            'office_id' => 6,
            'service_name' => 'Processing of Various Quarrying Permit Applications',
            'service_description' => 'Complete processing and facilitation of quarrying permits and licenses',
            'service_type' => 'G2B',
            'classification' => 'Complex',
            'who_may_avail' => 'Quarry operators, Business entities',
            'fees_required' => 'PHP 1,000-5,000 depending on permit type',
            'processing_time' => '30-45 working days'
        ]);

        Service::create([
            'office_id' => 6,
            'service_name' => 'Processing of Petitions for Declaration of People\'s Small-Scale Mining Area or Minahang Bayan',
            'service_description' => 'Facilitation of people\'s small-scale mining area declaration and processing',
            'service_type' => 'G2C',
            'classification' => 'Complex',
            'who_may_avail' => 'Small-scale miners, Mining cooperatives, Communities',
            'fees_required' => 'Free',
            'processing_time' => '60-90 working days'
        ]);

        Service::create([
            'office_id' => 6,
            'service_name' => 'Issuance of Endorsement of Work Program and other Pertinent Programs to MGB XI for Initial Evaluation',
            'service_description' => 'Provincial endorsement of mining work programs for regional review',
            'service_type' => 'G2B',
            'classification' => 'Complex',
            'who_may_avail' => 'Mining operators, Business entities',
            'fees_required' => 'Free',
            'processing_time' => '15-20 working days'
        ]);

        Service::create([
            'office_id' => 6,
            'service_name' => 'Processing of Small-Scale Mining Contract Applications',
            'service_description' => 'Processing of small-scale mining contracts and related documents',
            'service_type' => 'G2C',
            'classification' => 'Complex',
            'who_may_avail' => 'Small-scale miners, Mining groups',
            'fees_required' => 'PHP 500-2,000',
            'processing_time' => '30-45 working days'
        ]);

        Service::create([
            'office_id' => 6,
            'service_name' => 'Processing of Mineral Processor\'s License Applications',
            'service_description' => 'Application and processing of licenses for mineral processing operations',
            'service_type' => 'G2B',
            'classification' => 'Complex',
            'who_may_avail' => 'Mineral processors, Business entities',
            'fees_required' => 'PHP 1,000-5,000',
            'processing_time' => '45-60 working days'
        ]);

        Service::create([
            'office_id' => 6,
            'service_name' => 'Registration of Approved Permits/Contracts/License',
            'service_description' => 'Registration and documentation of approved mining permits and licenses',
            'service_type' => 'G2B',
            'classification' => 'Simple',
            'who_may_avail' => 'Mining operators, Licensed entities',
            'fees_required' => 'PHP 200-500',
            'processing_time' => '5-10 working days'
        ]);

        Service::create([
            'office_id' => 6,
            'service_name' => 'Issuance of Small-Scale Miners License',
            'service_description' => 'Issuance of licenses for small-scale mining operations',
            'service_type' => 'G2C',
            'classification' => 'Complex',
            'who_may_avail' => 'Small-scale miners, Mining groups',
            'fees_required' => 'PHP 500-1,500',
            'processing_time' => '15-30 working days'
        ]);

        Service::create([
            'office_id' => 6,
            'service_name' => 'Issuance of Ore Transport Permit',
            'service_description' => 'Permit for transport and movement of mined ore materials',
            'service_type' => 'G2B',
            'classification' => 'Simple',
            'who_may_avail' => 'Mining operators, Transport companies',
            'fees_required' => 'PHP 200-500 per permit',
            'processing_time' => '3-5 working days'
        ]);

        Service::create([
            'office_id' => 6,
            'service_name' => 'Issuance of Mineral Ore Export Permit (MOEP)',
            'service_description' => 'Export permit for mineral ore and materials to foreign destinations',
            'service_type' => 'G2B',
            'classification' => 'Complex',
            'who_may_avail' => 'Mining companies, Export traders',
            'fees_required' => 'PHP 1,000-5,000',
            'processing_time' => '20-30 working days'
        ]);

        Service::create([
            'office_id' => 6,
            'service_name' => 'Issuance of Temporary Permit',
            'service_description' => 'Temporary permits for mining or quarrying operations while awaiting final approval',
            'service_type' => 'G2B',
            'classification' => 'Simple',
            'who_may_avail' => 'Mining operators, Applicants',
            'fees_required' => 'PHP 500-1,000',
            'processing_time' => '5-10 working days'
        ]);

        Service::create([
            'office_id' => 6,
            'service_name' => 'Issuance of Certification',
            'service_description' => 'General certification of mining-related compliance and requirements',
            'service_type' => 'G2B',
            'classification' => 'Simple',
            'who_may_avail' => 'Mining operators, Business entities',
            'fees_required' => 'PHP 100-300',
            'processing_time' => '3-5 working days'
        ]);

        // ============================================
        // 7. PROVINCIAL ENGINEER'S OFFICE (ID: 7)
        // ============================================
        
        Service::create([
            'office_id' => 7,
            'service_name' => 'Provision of Reinforced Concrete Pipe Culvert (RCPC) for Barangays',
            'service_description' => 'Construction and provision of concrete pipe culverts for barangay infrastructure projects',
            'service_type' => 'G2G',
            'classification' => 'Complex',
            'who_may_avail' => 'Barangays, Local Government Units',
            'fees_required' => 'Free to cost-sharing basis',
            'processing_time' => '30-60 working days'
        ]);

        Service::create([
            'office_id' => 7,
            'service_name' => 'Provision of Reinforced Concrete Pipe Culvert (RCPC) for Private Sector',
            'service_description' => 'Supply and installation of concrete pipe culverts for private development projects',
            'service_type' => 'G2B',
            'classification' => 'Complex',
            'who_may_avail' => 'Private contractors, Business entities, Developers',
            'fees_required' => 'PHP 5,000-50,000 depending on size',
            'processing_time' => '30-60 working days'
        ]);

        Service::create([
            'office_id' => 7,
            'service_name' => 'Technical & Social Services',
            'service_description' => 'Technical engineering consultations and social assessment for infrastructure projects',
            'service_type' => 'G2G',
            'classification' => 'Complex',
            'who_may_avail' => 'LGUs, Barangays, Government agencies',
            'fees_required' => 'Free',
            'processing_time' => '10-20 working days'
        ]);

        Service::create([
            'office_id' => 7,
            'service_name' => 'Provision of Equipment Rental for Barangays',
            'service_description' => 'Rental of heavy equipment and machinery for barangay infrastructure work',
            'service_type' => 'G2G',
            'classification' => 'Simple',
            'who_may_avail' => 'Barangays, Local Government Units',
            'fees_required' => 'PHP 2,000-10,000 per day/equipment',
            'processing_time' => '2-3 working days'
        ]);

        Service::create([
            'office_id' => 7,
            'service_name' => 'Provision of Equipment Rental for Private Sector',
            'service_description' => 'Rental of construction equipment for private construction and development projects',
            'service_type' => 'G2B',
            'classification' => 'Simple',
            'who_may_avail' => 'Private contractors, Developers, Business entities',
            'fees_required' => 'PHP 5,000-20,000 per day/equipment',
            'processing_time' => '2-3 working days'
        ]);

        // ============================================
        // 8. PROVINCIAL GOVERNOR'S OFFICE (ID: 8)
        // ============================================
        
        Service::create([
            'office_id' => 8,
            'service_name' => 'Provision of Message of the Governor to Souvenir\'s Program',
            'service_description' => 'Provision of Governor\'s written message or greeting for special events and programs',
            'service_type' => 'G2C',
            'classification' => 'Simple',
            'who_may_avail' => 'Organizations, Events organizers, Institutions',
            'fees_required' => 'Free',
            'processing_time' => '3-5 working days'
        ]);

        Service::create([
            'office_id' => 8,
            'service_name' => 'Provision of Governor\'s Invitation',
            'service_description' => 'Request for Governor\'s attendance and invitation to events and programs',
            'service_type' => 'G2C',
            'classification' => 'Simple',
            'who_may_avail' => 'Organizations, Event organizers, Government offices',
            'fees_required' => 'Free',
            'processing_time' => '5-10 working days'
        ]);

        Service::create([
            'office_id' => 8,
            'service_name' => 'Approval of Governor\'s Invitation',
            'service_description' => 'Approval and confirmation of Governor\'s participation in events',
            'service_type' => 'G2C',
            'classification' => 'Simple',
            'who_may_avail' => 'Organizations, Event organizers',
            'fees_required' => 'Free',
            'processing_time' => '5-10 working days'
        ]);

        Service::create([
            'office_id' => 8,
            'service_name' => 'Conduct of Skills and Livelihood Training and Seminar',
            'service_description' => 'Women development programs including skills and livelihood training',
            'service_type' => 'G2C',
            'classification' => 'Complex',
            'who_may_avail' => 'Women groups, Communities, Organizations',
            'fees_required' => 'Free',
            'processing_time' => '15-30 working days'
        ]);

        Service::create([
            'office_id' => 8,
            'service_name' => 'Provision of Financial Assistance to the Provincial Women Development Council and for the prizes of various activities',
            'service_description' => 'Financial support for women development programs and activities',
            'service_type' => 'G2C',
            'classification' => 'Complex',
            'who_may_avail' => 'Provincial Women Development Council, Women\'s groups, Communities',
            'fees_required' => 'Free',
            'processing_time' => '10-20 working days'
        ]);

        Service::create([
            'office_id' => 8,
            'service_name' => 'Provision of Food Assistance to LGUs Women\'s Day/Summit',
            'service_description' => 'Food and catering support for women development events and programs',
            'service_type' => 'G2G',
            'classification' => 'Simple',
            'who_may_avail' => 'LGUs, Women councils, Government offices',
            'fees_required' => 'Free',
            'processing_time' => '5-10 working days'
        ]);

        Service::create([
            'office_id' => 8,
            'service_name' => 'Honorarium for referees relative to the various province–wide and outside Davao de Oro sports competition',
            'service_description' => 'Honorarium and support for sports officials and referees in provincial competitions',
            'service_type' => 'G2C',
            'classification' => 'Simple',
            'who_may_avail' => 'Sports officials, Athletes, Sports organizations',
            'fees_required' => 'Free',
            'processing_time' => '5-10 working days'
        ]);

        Service::create([
            'office_id' => 8,
            'service_name' => 'Provision of Davao de Oro Transformative Program-Kontra Droga',
            'service_description' => 'Anti-drug programs and support for drug rehabilitation and prevention',
            'service_type' => 'G2C',
            'classification' => 'Complex',
            'who_may_avail' => 'Communities, Organizations, Rehabilitants',
            'fees_required' => 'Free',
            'processing_time' => '15-30 working days'
        ]);

        Service::create([
            'office_id' => 8,
            'service_name' => 'Community-Based Program for Plea Bargainers',
            'service_description' => 'Support programs for reformed drug offenders and community rehabilitation',
            'service_type' => 'G2C',
            'classification' => 'Complex',
            'who_may_avail' => 'Plea bargainers, Reformed offenders, Communities',
            'fees_required' => 'Free',
            'processing_time' => '20-30 working days'
        ]);

        Service::create([
            'office_id' => 8,
            'service_name' => 'Provincial Spirituality Program – Restoration of Filipino Values',
            'service_description' => 'Programs promoting moral, spiritual and ethical values in the community',
            'service_type' => 'G2C',
            'classification' => 'Complex',
            'who_may_avail' => 'Communities, Organizations, Civic groups',
            'fees_required' => 'Free',
            'processing_time' => '10-20 working days'
        ]);

        Service::create([
            'office_id' => 8,
            'service_name' => 'Provision to facilitate requests from DepEd Officials/Non-Teaching, Teaching Personnel and Professional Fee Services',
            'service_description' => 'Support services for Department of Education officials and teachers',
            'service_type' => 'G2G',
            'classification' => 'Simple',
            'who_may_avail' => 'DepEd officials, Teachers, School personnel',
            'fees_required' => 'Free',
            'processing_time' => '5-10 working days'
        ]);

        // Financial Assistance Programs
        Service::create([
            'office_id' => 8,
            'service_name' => 'For Hospitalization Assistance',
            'service_description' => 'Financial assistance for hospitalization and medical expenses',
            'service_type' => 'G2C',
            'classification' => 'Simple',
            'who_may_avail' => 'Hospitalized individuals, Indigent patients',
            'fees_required' => 'Free - assistance program',
            'processing_time' => '5-10 working days'
        ]);

        Service::create([
            'office_id' => 8,
            'service_name' => 'For Hospital Bill Assistance',
            'service_description' => 'Financial aid for hospital billing and medical expenses payment',
            'service_type' => 'G2C',
            'classification' => 'Simple',
            'who_may_avail' => 'Patients, Individuals with medical bills',
            'fees_required' => 'Free',
            'processing_time' => '5-10 working days'
        ]);

        Service::create([
            'office_id' => 8,
            'service_name' => 'For Laboratory Assistance',
            'service_description' => 'Financial assistance for laboratory examinations and tests',
            'service_type' => 'G2C',
            'classification' => 'Simple',
            'who_may_avail' => 'Individuals needing lab tests',
            'fees_required' => 'Free',
            'processing_time' => '3-5 working days'
        ]);

        Service::create([
            'office_id' => 8,
            'service_name' => 'For Animal Bite Assistance',
            'service_description' => 'Financial support for animal bite treatment and anti-rabies vaccination',
            'service_type' => 'G2C',
            'classification' => 'Simple',
            'who_may_avail' => 'Animal bite victims',
            'fees_required' => 'Free - assistance program',
            'processing_time' => '1-2 working days'
        ]);

        Service::create([
            'office_id' => 8,
            'service_name' => 'For Burial Assistance',
            'service_description' => 'Financial assistance for burial and funeral expenses',
            'service_type' => 'G2C',
            'classification' => 'Simple',
            'who_may_avail' => 'Families of deceased indigent persons',
            'fees_required' => 'Free',
            'processing_time' => '3-5 working days'
        ]);

        Service::create([
            'office_id' => 8,
            'service_name' => 'For Fire Victim Assistance',
            'service_description' => 'Emergency financial and material assistance for fire disaster victims',
            'service_type' => 'G2C',
            'classification' => 'Simple',
            'who_may_avail' => 'Fire victims, Disaster affected individuals',
            'fees_required' => 'Free',
            'processing_time' => '1-3 working days'
        ]);

        // ============================================
        // 9. PROVINCIAL GOVERNOR'S OFFICE - BIDS AND AWARDS COMMITTEE (ID: 9)
        // ============================================
        
        Service::create([
            'office_id' => 9,
            'service_name' => 'Issuance of Bidding Documents',
            'service_description' => 'Provision of bidding documents and procurement packages for government suppliers',
            'service_type' => 'G2B',
            'classification' => 'Simple',
            'who_may_avail' => 'Registered suppliers, Contractors, Business entities',
            'fees_required' => 'PHP 100-500 per document',
            'processing_time' => '2-3 working days'
        ]);

        // ============================================
        // 10. PROVINCIAL GENERAL SERVICES OFFICE (ID: 10)
        // ============================================
        
        Service::create([
            'office_id' => 10,
            'service_name' => 'Issuance of Certificate of Supplier\'s Performance Evaluation',
            'service_description' => 'Certification of suppliers\' performance ratings and procurement history',
            'service_type' => 'G2B',
            'classification' => 'Simple',
            'who_may_avail' => 'Registered suppliers, Contractors',
            'fees_required' => 'PHP 100-200',
            'processing_time' => '3-5 working days'
        ]);

        Service::create([
            'office_id' => 10,
            'service_name' => 'Request for Assistance (Supplies and Materials)',
            'service_description' => 'Processing of requests for supplies and materials for government offices',
            'service_type' => 'G2G',
            'classification' => 'Simple',
            'who_may_avail' => 'PLGU offices, Government agencies',
            'fees_required' => 'Free',
            'processing_time' => '5-10 working days'
        ]);

        Service::create([
            'office_id' => 10,
            'service_name' => 'Issuance of Bid Documents to Prospective Buyers',
            'service_description' => 'Provision of bidding documents and procurement information to suppliers',
            'service_type' => 'G2B',
            'classification' => 'Simple',
            'who_may_avail' => 'Prospective suppliers, Contractors, Bidders',
            'fees_required' => 'PHP 100-300',
            'processing_time' => '2-3 working days'
        ]);

        // ============================================
        // 11. PROVINCIAL SOCIAL WELFARE AND DEVELOPMENT OFFICE (ID: 11)
        // ============================================
        
        Service::create([
            'office_id' => 11,
            'service_name' => 'Provision of 4Ps (Pantawid Pamilyangfilipino Program) Support Services',
            'service_description' => 'Administrative support and assistance for 4Ps beneficiary programs',
            'service_type' => 'G2C',
            'classification' => 'Complex',
            'who_may_avail' => 'Poor and vulnerable families, 4Ps beneficiaries',
            'fees_required' => 'Free',
            'processing_time' => '10-15 working days'
        ]);

        Service::create([
            'office_id' => 11,
            'service_name' => 'Social Services for Indigent/Poor Families',
            'service_description' => 'Assistance programs and social services for indigent families',
            'service_type' => 'G2C',
            'classification' => 'Complex',
            'who_may_avail' => 'Indigent families, Persons in need of assistance',
            'fees_required' => 'Free',
            'processing_time' => '10-20 working days'
        ]);

        Service::create([
            'office_id' => 11,
            'service_name' => 'Assistance for Senior Citizens',
            'service_description' => 'Social services and benefits programs for senior citizens',
            'service_type' => 'G2C',
            'classification' => 'Simple',
            'who_may_avail' => 'Senior citizens, Registered senior citizens',
            'fees_required' => 'Free',
            'processing_time' => '5-10 working days'
        ]);

        Service::create([
            'office_id' => 11,
            'service_name' => 'Assistance for Persons with Disabilities (PWD)',
            'service_description' => 'Social services, benefits and programs for persons with disabilities',
            'service_type' => 'G2C',
            'classification' => 'Complex',
            'who_may_avail' => 'Persons with disabilities, PWD families',
            'fees_required' => 'Free',
            'processing_time' => '10-15 working days'
        ]);

        Service::create([
            'office_id' => 11,
            'service_name' => 'Child Welfare and Protection Services',
            'service_description' => 'Protection and welfare services for children in need of special protection',
            'service_type' => 'G2C',
            'classification' => 'Complex',
            'who_may_avail' => 'Children in need, Families with child welfare concerns',
            'fees_required' => 'Free',
            'processing_time' => '10-20 working days'
        ]);

        // ============================================
        // 12. PROVINCIAL HEALTH OFFICE (ID: 12)
        // ============================================
        
        Service::create([
            'office_id' => 12,
            'service_name' => 'Issuance of Medical Certificate',
            'service_description' => 'Medical certificates for employment, travel, or other official purposes',
            'service_type' => 'G2C',
            'classification' => 'Simple',
            'who_may_avail' => 'All persons requiring medical certificates',
            'fees_required' => 'PHP 50-100',
            'processing_time' => '1-2 working days'
        ]);

        Service::create([
            'office_id' => 12,
            'service_name' => 'Issuance of Certificate of Vaccination',
            'service_description' => 'Vaccination certificates for immunization and health records',
            'service_type' => 'G2C',
            'classification' => 'Simple',
            'who_may_avail' => 'All vaccinated individuals',
            'fees_required' => 'Free',
            'processing_time' => '1 working day'
        ]);

        Service::create([
            'office_id' => 12,
            'service_name' => 'Request for the Provision of Logistics',
            'service_description' => 'Provision of medical and health logistics support for health programs',
            'service_type' => 'G2G',
            'classification' => 'Complex',
            'who_may_avail' => 'Government agencies, LGUs, Health facilities',
            'fees_required' => 'Free',
            'processing_time' => '5-15 working days'
        ]);

        Service::create([
            'office_id' => 12,
            'service_name' => 'Request for Provision of Available Medicines',
            'service_description' => 'Distribution of medicines from provincial health office inventory',
            'service_type' => 'G2G',
            'classification' => 'Simple',
            'who_may_avail' => 'Health facilities, LGUs, Health programs',
            'fees_required' => 'Free',
            'processing_time' => '2-5 working days'
        ]);

        Service::create([
            'office_id' => 12,
            'service_name' => 'Out-patient Medical Check-up',
            'service_description' => 'Medical consultation and health screening services',
            'service_type' => 'G2C',
            'classification' => 'Simple',
            'who_may_avail' => 'Citizens, General public',
            'fees_required' => 'PHP 100-300',
            'processing_time' => '1-2 hours'
        ]);

        Service::create([
            'office_id' => 12,
            'service_name' => 'Request for Special Outreach Program Services',
            'service_description' => 'Community health outreach and special health programs',
            'service_type' => 'G2C',
            'classification' => 'Complex',
            'who_may_avail' => 'Communities, Barangays, Organizations',
            'fees_required' => 'Free',
            'processing_time' => '10-20 working days'
        ]);

        Service::create([
            'office_id' => 12,
            'service_name' => 'Provision of Vaccination Services (Walk-in)',
            'service_description' => 'On-site vaccination services for drop-in clients',
            'service_type' => 'G2C',
            'classification' => 'Simple',
            'who_may_avail' => 'All persons eligible for vaccination',
            'fees_required' => 'Free',
            'processing_time' => '30 minutes - 1 hour'
        ]);

        Service::create([
            'office_id' => 12,
            'service_name' => 'Request for Blood: Direct Distribution',
            'service_description' => 'Blood bank services and blood product distribution',
            'service_type' => 'G2C',
            'classification' => 'Simple',
            'who_may_avail' => 'Patients, Medical facilities',
            'fees_required' => 'PHP 500-3,000 per unit',
            'processing_time' => '1-4 hours'
        ]);

        Service::create([
            'office_id' => 12,
            'service_name' => 'Generation of List of Specific Blood Donors',
            'service_description' => 'Database search and provision of compatible blood donor lists',
            'service_type' => 'G2C',
            'classification' => 'Simple',
            'who_may_avail' => 'Hospitals, Patients, Medical facilities',
            'fees_required' => 'Free',
            'processing_time' => '1-2 hours'
        ]);

        Service::create([
            'office_id' => 12,
            'service_name' => 'Request for Human Immunodeficiency Virus Counseling & Testing (VCT)',
            'service_description' => 'HIV testing and counseling services',
            'service_type' => 'G2C',
            'classification' => 'Simple',
            'who_may_avail' => 'All persons requesting HIV testing',
            'fees_required' => 'Free',
            'processing_time' => '1-2 hours'
        ]);

        Service::create([
            'office_id' => 12,
            'service_name' => 'Request for Active Case Finding for Tuberculosis',
            'service_description' => 'Tuberculosis screening and case investigation programs',
            'service_type' => 'G2C',
            'classification' => 'Complex',
            'who_may_avail' => 'Community members, High-risk groups',
            'fees_required' => 'Free',
            'processing_time' => '5-10 working days'
        ]);

        Service::create([
            'office_id' => 12,
            'service_name' => 'Provision of NS1 Testing for Dengue',
            'service_description' => 'Dengue virus testing and diagnosis services',
            'service_type' => 'G2C',
            'classification' => 'Simple',
            'who_may_avail' => 'Suspected dengue cases, Patients',
            'fees_required' => 'PHP 300-500',
            'processing_time' => '2-4 hours'
        ]);

        Service::create([
            'office_id' => 12,
            'service_name' => 'Request for Lectures on Non-Communicable Disease Program',
            'service_description' => 'Health education on chronic diseases and prevention strategies',
            'service_type' => 'G2C',
            'classification' => 'Complex',
            'who_may_avail' => 'Communities, Schools, Organizations, Workplaces',
            'fees_required' => 'Free',
            'processing_time' => '5-10 working days'
        ]);

        Service::create([
            'office_id' => 12,
            'service_name' => 'Provision of Random Blood Sugar (RBS) Testing',
            'service_description' => 'Diabetes screening services using blood sugar testing',
            'service_type' => 'G2C',
            'classification' => 'Simple',
            'who_may_avail' => 'All persons, High-risk individuals',
            'fees_required' => 'PHP 50-100',
            'processing_time' => '15-30 minutes'
        ]);

        Service::create([
            'office_id' => 12,
            'service_name' => 'Request for Site Suitability Verification',
            'service_description' => 'Verification of sites for health facilities and programs',
            'service_type' => 'G2G',
            'classification' => 'Complex',
            'who_may_avail' => 'LGUs, Government agencies, Organizations',
            'fees_required' => 'Free',
            'processing_time' => '10-15 working days'
        ]);

        // ============================================
        // 13. PROVINCIAL PLANNING AND DEVELOPMENT OFFICE (ID: 13)
        // ============================================
        
        Service::create([
            'office_id' => 13,
            'service_name' => 'Provision of Development Plans and Programs',
            'service_description' => 'Comprehensive development plans and program information for municipalities and barangays',
            'service_type' => 'G2G',
            'classification' => 'Complex',
            'who_may_avail' => 'LGUs, Government offices, Development agencies',
            'fees_required' => 'Free',
            'processing_time' => '10-20 working days'
        ]);

        Service::create([
            'office_id' => 13,
            'service_name' => 'Provision of Statistical Data and Information',
            'service_description' => 'Provincial statistical data and demographic information for planning and research',
            'service_type' => 'G2G',
            'classification' => 'Simple',
            'who_may_avail' => 'Government offices, Researchers, Academic institutions',
            'fees_required' => 'Free to PHP 500',
            'processing_time' => '5-10 working days'
        ]);

        Service::create([
            'office_id' => 13,
            'service_name' => 'Technical Assistance on Planning and Development',
            'service_description' => 'Technical support in formulating development plans and programs',
            'service_type' => 'G2G',
            'classification' => 'Complex',
            'who_may_avail' => 'LGUs, Barangays, Government agencies',
            'fees_required' => 'Free',
            'processing_time' => '15-30 working days'
        ]);

        // ============================================
        // 14. PROVINCIAL TREASURER'S OFFICE (ID: 14)
        // ============================================
        
        Service::create([
            'office_id' => 14,
            'service_name' => 'Collection of Provincial Taxes and Revenues',
            'service_description' => 'Processing of tax payments and revenue collections for the province',
            'service_type' => 'G2C',
            'classification' => 'Simple',
            'who_may_avail' => 'Taxpayers, Business entities, Property owners',
            'fees_required' => 'Based on tax amount',
            'processing_time' => 'Same day'
        ]);

        Service::create([
            'office_id' => 14,
            'service_name' => 'Issuance of Official Receipt (OR)',
            'service_description' => 'Issuance of official receipts for payments and revenue collections',
            'service_type' => 'G2C',
            'classification' => 'Simple',
            'who_may_avail' => 'Payers, Taxpayers, Clients',
            'fees_required' => 'Free',
            'processing_time' => '1-2 minutes'
        ]);

        Service::create([
            'office_id' => 14,
            'service_name' => 'Issuance of Certification of No Delinquency',
            'service_description' => 'Certification that a property or entity has no delinquent taxes',
            'service_type' => 'G2C',
            'classification' => 'Simple',
            'who_may_avail' => 'Property owners, Taxpayers, Businesses',
            'fees_required' => 'PHP 50-100',
            'processing_time' => '2-3 working days'
        ]);

        // ============================================
        // 15. PROVINCIAL VETERINARY OFFICE (ID: 15)
        // ============================================
        
        Service::create([
            'office_id' => 15,
            'service_name' => 'Animal Quarantine Services',
            'service_description' => 'Quarantine and health inspection of livestock and animal imports',
            'service_type' => 'G2C',
            'classification' => 'Complex',
            'who_may_avail' => 'Livestock owners, Animal traders, Farmers',
            'fees_required' => 'PHP 500-2,000 depending on animal type',
            'processing_time' => '3-10 working days'
        ]);

        Service::create([
            'office_id' => 15,
            'service_name' => 'Issuance of Health Certificate for Animals',
            'service_description' => 'Health certification for livestock and animals for trade and movement',
            'service_type' => 'G2C',
            'classification' => 'Simple',
            'who_may_avail' => 'Livestock traders, Farmers, Animal owners',
            'fees_required' => 'PHP 200-500 per certificate',
            'processing_time' => '3-5 working days'
        ]);

        Service::create([
            'office_id' => 15,
            'service_name' => 'Assistance for Livestock Development Programs',
            'service_description' => 'Technical and advisory services for livestock raising and improvement',
            'service_type' => 'G2C',
            'classification' => 'Complex',
            'who_may_avail' => 'Farmers, Livestock raisers, Barangays',
            'fees_required' => 'Free',
            'processing_time' => '10-20 working days'
        ]);

        Service::create([
            'office_id' => 15,
            'service_name' => 'Issuance of Meat Inspection Certificate',
            'service_description' => 'Meat inspection and certification for meat products trade',
            'service_type' => 'G2B',
            'classification' => 'Simple',
            'who_may_avail' => 'Meat traders, Meat retailers, Meat processing businesses',
            'fees_required' => 'PHP 100-300 per certificate',
            'processing_time' => '1-2 working days'
        ]);

        // ============================================
        // 16. PROVINCIAL LEGAL OFFICE (ID: 16)
        // ============================================
        
        Service::create([
            'office_id' => 16,
            'service_name' => 'Legal Consultation and Advice',
            'service_description' => 'Legal consultation services for PLGU offices and authorized persons',
            'service_type' => 'G2G',
            'classification' => 'Complex',
            'who_may_avail' => 'PLGU officials, Government offices',
            'fees_required' => 'Free',
            'processing_time' => '5-15 working days'
        ]);

        Service::create([
            'office_id' => 16,
            'service_name' => 'Issuance of Certification/Legal Opinions',
            'service_description' => 'Legal certifications and opinions on various matters',
            'service_type' => 'G2G',
            'classification' => 'Complex',
            'who_may_avail' => 'PLGU offices, Government agencies',
            'fees_required' => 'Free',
            'processing_time' => '10-20 working days'
        ]);

        // ============================================
        // 17. PROVINCIAL INTERNAL AUDIT OFFICE (ID: 17)
        // ============================================
        
        Service::create([
            'office_id' => 17,
            'service_name' => 'Audit of Government Transactions',
            'service_description' => 'Financial and operational audit of PLGU offices and programs',
            'service_type' => 'G2G',
            'classification' => 'Complex',
            'who_may_avail' => 'PLGU offices, Government agencies',
            'fees_required' => 'Free',
            'processing_time' => '30-60 working days'
        ]);

        Service::create([
            'office_id' => 17,
            'service_name' => 'Issuance of Audit Reports and Certifications',
            'service_description' => 'Provision of audit findings and certifications on financial transactions',
            'service_type' => 'G2G',
            'classification' => 'Simple',
            'who_may_avail' => 'Government offices, Authorized officials',
            'fees_required' => 'Free',
            'processing_time' => '5-10 working days'
        ]);

        // ============================================
        // 18. PROVINCIAL HUMAN RESOURCE MANAGEMENT AND DEVELOPMENT OFFICE (ID: 18)
        // ============================================
        
        Service::create([
            'office_id' => 18,
            'service_name' => 'Processing of Personnel Records and Documents',
            'service_description' => 'Management and processing of government personnel records and documents',
            'service_type' => 'G2G',
            'classification' => 'Simple',
            'who_may_avail' => 'PLGU employees, Government officials',
            'fees_required' => 'Free',
            'processing_time' => '3-5 working days'
        ]);

        Service::create([
            'office_id' => 18,
            'service_name' => 'Conduct of Training and Development Programs',
            'service_description' => 'Capacity building and professional development programs for government employees',
            'service_type' => 'G2G',
            'classification' => 'Complex',
            'who_may_avail' => 'PLGU employees, Government staff',
            'fees_required' => 'Free',
            'processing_time' => '15-30 working days'
        ]);

        Service::create([
            'office_id' => 18,
            'service_name' => 'Issuance of Service Records and Certifications',
            'service_description' => 'Certification of service records and employment history',
            'service_type' => 'G2C',
            'classification' => 'Simple',
            'who_may_avail' => 'Government employees, Retired officials',
            'fees_required' => 'Free to PHP 100',
            'processing_time' => '2-3 working days'
        ]);

        // ============================================
        // 19. PROVINCIAL INFORMATION AND COMMUNICATIONS TECHNOLOGY OFFICE (ID: 19)
        // ============================================
        
        Service::create([
            'office_id' => 19,
            'service_name' => 'ICT Technical Support Services',
            'service_description' => 'Information technology support and maintenance services for government offices',
            'service_type' => 'G2G',
            'classification' => 'Simple',
            'who_may_avail' => 'PLGU offices, Government departments',
            'fees_required' => 'Free',
            'processing_time' => '1-3 working days'
        ]);

        Service::create([
            'office_id' => 19,
            'service_name' => 'Provision of ICT Training',
            'service_description' => 'Training programs on information technology and digital skills',
            'service_type' => 'G2G',
            'classification' => 'Complex',
            'who_may_avail' => 'PLGU employees, Government staff',
            'fees_required' => 'Free',
            'processing_time' => '10-20 working days'
        ]);

        Service::create([
            'office_id' => 19,
            'service_name' => 'System Administration and Maintenance',
            'service_description' => 'IT system administration, security and maintenance services',
            'service_type' => 'G2G',
            'classification' => 'Complex',
            'who_may_avail' => 'PLGU offices',
            'fees_required' => 'Free',
            'processing_time' => 'Ongoing support'
        ]);

        // ============================================
        // 20. PROVINCIAL LIBRARY (ID: 20)
        // ============================================
        
        Service::create([
            'office_id' => 20,
            'service_name' => 'Issuance of Copies of Approved Resolutions, Ordinances, Journal of Proceedings, Minutes and other documents',
            'service_description' => 'Provision of certified copies of legislative documents and official records',
            'service_type' => 'G2G',
            'classification' => 'Simple',
            'who_may_avail' => 'Government offices, Public, Researchers',
            'fees_required' => 'PHP 30-100 per document',
            'processing_time' => '1-2 working days'
        ]);

        Service::create([
            'office_id' => 20,
            'service_name' => 'Issuance of Certification and Provision of proof of compliance (Certificate of Posting / Receipt)',
            'service_description' => 'Certification of posting and public notice compliance',
            'service_type' => 'G2G',
            'classification' => 'Simple',
            'who_may_avail' => 'Government offices, Applicants',
            'fees_required' => 'PHP 150',
            'processing_time' => '15 days for posting',
        ]);

        Service::create([
            'office_id' => 20,
            'service_name' => 'Library and Research Services',
            'service_description' => 'Reference and research services for legislative and historical documents',
            'service_type' => 'G2C',
            'classification' => 'Simple',
            'who_may_avail' => 'Public, Researchers, Students, Scholars',
            'fees_required' => 'Free to minimal fees',
            'processing_time' => '2-5 working days'
        ]);
    }
}