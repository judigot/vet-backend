/* Owner: App Scaffolder */
import { customFetch } from "../customFetch";
import { IEmergencyContact } from "../../interfaces/interfaces";

type IBody = Omit<IEmergencyContact, 'id'>;

export const createEmergencyContact = async (
  formData: IBody,
): Promise<IBody | undefined> => {
  const result: IBody | undefined = await customFetch.post({
    url: `/emergency_contacts`,
    body: JSON.stringify(formData),
  });
  return result;
};

